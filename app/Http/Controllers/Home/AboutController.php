<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Education;
use App\Models\MultiImage;
use App\Models\MyContact;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class AboutController extends Controller
{
    public function aboutPage()
    {
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    }

    public function updateAbout(Request $request) 
    {
        $about_id = $request->id;
        
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(523, 605)->save('upload/home_about/'.$name_gen);
            $save_url = 'upload/home_about/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About page updated with image successfully',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        } else {
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            $notification = array(
                'message' => 'About page updated without image successfully',
                'alert-type' => 'success',
            );
    
            return redirect()->back()->with($notification);
        }
    }

    public function homeAbout() 
    {
        $aboutpage = About::find(1);
        $multiImages = MultiImage::limit(6)->get();
        $blogs = Blog::latest()->limit(3)->get();
        $resume = Resume::find(1);

        return view('frontend.about_page', compact(
            'aboutpage', 'multiImages', 'blogs', 'resume'
        ));    
    }

    public function aboutMultiImage() 
    {
        return view('admin.about_page.multi_image');    
    }

    public function storeMultiImage(Request $request)
    {
        $images = $request->file('multi_image');

        foreach ($images as $image) {
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(220, 220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Multi images inserted successfully',
                'alert-type' => 'success',
            );
        }

        return redirect()->route('all.multi.image')->with($notification);
    }

    public function allMultiImage()
    {
        $allMultiImage = MultiImage::all();
        return view('admin.about_page.all_multi_image', compact('allMultiImage'));    
    }

    public function editMultiImage($id)
    {
        $multiImage = MultiImage::findOrFail($id);
        return view('admin.about_page.edit_multi_image', compact('multiImage'));    
    }

    public function updateMultiImage(Request $request)
    {
        $multi_image_id = $request->id;
        
        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(220, 220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            MultiImage::findOrFail($multi_image_id)->update([
                'multi_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Multi image updated successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.multi.image')->with($notification);
        } 
    }

    public function deleteMultiImage($id)
    {
        $multiImage = MultiImage::findOrFail($id);
        $img = $multiImage->multi_image;
        unlink($img);
        
        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Multi image deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function showResume() 
    {
        $resume = Resume::find(1);
        return view('admin.about_page.resume', compact('resume'));
    }

    public function indexEducation() 
    {
        // $elementary = Education::find(1);
        $jhs = Education::find(2);
        $shs = Education::find(3);
        $undergraduate = Education::find(4);
        return view('admin.about_page.education', compact('jhs', 'shs', 'undergraduate'));
    }
}
