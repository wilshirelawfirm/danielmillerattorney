<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact');
    }


    /**
     * Store a newly created resource in storage.
     *
     * Email the contact request
     *
     * @param ContactRequest $request
     * @return Redirect
     */
    public function store(ContactRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::queue('email.contact', $data, function ($message) use ($data) {
          $message->subject('Lead: '.$data['name'])
                  ->sender(config('attorney.lead_email'), config('attorney.lead_email_name'))
                  ->from(config('attorney.lead_email'), config('attorney.lead_email_name'))
                  ->to(config('attorney.lead_email'))
                  ->replyTo(config('attorney.lead_email'));
        });

        //Lets insert into database
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route('contact-thanks')
            ->with('success',"Thank you. Your message has been received and will be responded to shortly.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display a thank you message.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {
        return view('pages.contact-thanks');
    }

}
