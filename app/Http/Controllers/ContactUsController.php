<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{

    public function index()
    {
        return view("contactUs");
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), array(
            'email' => 'required|email',
            'phone' => 'nullable|phone:DZ',
            'message' => 'required'
        ))->validate();
        $contactUs = [
            'phone' => $request->phone,
            'message' => $request->message,
            'email' => $request->email
        ];

        Mail::to($request->user())->send(new ContactUsMail($contactUs));
        return redirect(route('contact.index'))->with('success', "Thank you for contacting us.");
    }

    public function create()
    {
//        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
//        ContactUS::create($request->all());
//
//        Mail::send('email',
//            array(
//                'name' => $request->get('name'),
//                'email' => $request->get('email'),
//                'user_message' => $request->get('message')
//            ), function($message)
//            {
//                $message->from('saquib.gt@gmail.com');
//                $message->to('saquib.rizwan@cloudways.com', 'Admin')->subject('Cloudways Feedback');
//            });
//        return back()->with('success', 'Thanks for contacting us!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}