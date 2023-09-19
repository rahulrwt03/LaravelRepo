<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Mail\ContactNotification; // Import the ContactNotification class

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        // Validate the form data using the ContactFormRequest rules

        // Create a new Contact model and fill it with the validated data
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        // Send an email notification
        $recipientEmail = 'rawatrahulrawat550@gmail.com'; // Replace with the recipient's email address
        $subject = 'New Contact Form Submission';
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Mail::to($recipientEmail)->send(new ContactNotification($subject, $data));

        // Redirect back to the contact form with a success message
        return redirect('/contact')->with('success', 'Your message has been sent!');
    }
}
