<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function contact() 
    {
        return view('frontend.contact');
    }

    public function storeMessage(Request $request) 
    {
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your message submitted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function contactMessage(Request $request) 
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact_all', compact('contacts'));
    }

    public function deleteMessage($id) 
    {
        Contact::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Your message deleted successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
