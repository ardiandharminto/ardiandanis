<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footerSetup() 
    {
        $footer = Footer::find(1);
        return view('admin.footer.footer_all', compact('footer'));
    }

    public function updateFooter(Request $request) 
    {
        $footer_id = $request->id;
        
        Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'city_address' => $request->city_address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'copyright' => $request->copyright,
        ]);

        $notification = array(
            'message' => 'Footer updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
