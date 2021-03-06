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

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactUsMail($contactUs));
        return redirect(route('contact.index'))->with('success', "Thank you for contacting us.");
    }

    public function create()
    {
        //
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