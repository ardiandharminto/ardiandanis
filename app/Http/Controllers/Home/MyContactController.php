<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\MyContact;
use Illuminate\Http\Request;

class MyContactController extends Controller
{
    public function index()
    {
        $my_contact = MyContact::find(1);
        return view('admin.my_contact.index', compact('my_contact'));
    }

    public function updateMyContact(Request $request) 
    {
        $myContactId = $request->id;

        MyContact::findOrFail($myContactId)->update([
            'number' => $request->number,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);

        $notification = array(
            'message' => 'My Contact updated successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
