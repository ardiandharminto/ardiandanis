<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class BlogController extends Controller
{
    public function allBlog() 
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.blog_all', compact('blogs'));
    }

    public function addBlog() 
    {
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('admin.blog.blog_add', compact('categories'));
    }

    public function storeBlog(Request $request) 
    {
        $rules = [
            'blog_title' => 'required',
            'blog_description' => 'required',
        ];

        $error_messages = [
            'blog_title.required' => 'Blog title is required',
            'blog_description.required' => 'Blog title is required',
        ];

        $request->validate($rules, $error_messages);

        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        
        Image::make($image)->resize(430, 327)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'blog_category_id' => $request->blog_category_id,
            'blog_title' => $request->blog_title,
            'blog_tags' => $request->blog_tags,
            'blog_description' => $request->blog_description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog inserted successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog')->with($notification);
    }

    public function editBlog($id) 
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('admin.blog.blog_edit', compact('blog', 'categories'));
    }

    public function updateBlog(Request $request) 
    {
        $blog_id = $request->id;
        
        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->resize(430, 327)->save('upload/blog/'.$name_gen);
            $save_url = 'upload/blog/'.$name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Blog updated with image successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('all.blog')->with($notification);
        } else {
            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);

            $notification = array(
                'message' => 'Blog updated without image successfully',
                'alert-type' => 'success',
            );
    
            return redirect()->route('all.blog')->with($notification);
        }
    } // end method

    public function deleteBlog($id) 
    {
        $blog = Blog::findOrFail($id);
        $img = $blog->blog_image;
        unlink($img);
        
        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function blogDetails($id) 
    {
        $allblogs = Blog::latest()->limit(5)->get();
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        return view('frontend.blog_details', compact('blog', 'allblogs', 'categories'));
    }

    public function blogCategory($id) 
    {
        $blogs = Blog::where('blog_category_id', $id)->orderBy('id', 'desc')->get();
        $allblogs = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        $categoryname = BlogCategory::findOrFail($id);
        return view('frontend.cat_blog_details', compact(
            'blogs', 'allblogs', 'categories', 'categoryname'
        ));
    }

    public function homeBlog() 
    {
        $categories = BlogCategory::orderBy('blog_category', 'asc')->get();
        $blogs = Blog::latest()->paginate(3);
        return view('frontend.blog', compact('blogs', 'categories'));
    }
}
