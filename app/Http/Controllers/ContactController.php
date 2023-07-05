<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        $categories = (new Category())->subcategries();
        return view ('contact-us', ['categories' => $categories]);
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'massage' => $request->massage,
        ];

    FacadesMail::to('sales@thorico.co.za')->send(new ContactMail($details));
        return back()->with('message_sent',"Your Message Has Been Sent Successfully!");
    }
}
