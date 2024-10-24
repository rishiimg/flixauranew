<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Matcher\Contains;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = Contactus::all();
        return view('contacts.view', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'city' => ['required'],
            'service' => ['required'],
            'budget' => ['required'],
            'message' => ['required'],
        ]);
        $contacts = Contactus::create($request->all());
        $mailData = [
            'title' => 'Mail from flixauranew',
            'body' => 'This is for testing email using smtp.'
        ];

        $mail = $request->email ?? 'your_email@gmail.com';

        Mail::to($mail)->send(new ContactMail($mailData));

        return redirect()->back()->with('success', 'social links created successfully.');
    }

    public function edit($id)
    {
        $contacts = Contactus::findOrFail($id);
        return view('contacts.editsocial', compact('contacts'));
    }

    public function update(Request $request, $id)
    {
        $contacts = Contactus::findOrFail($id);
        $contacts->update($request->all());
        return redirect()->back()->with('success', 'social links updated successfully.');
    }

    public function destroy($id)
    {
        $contacts = Contactus::findOrFail($id);
        $contacts->delete();
        return redirect()->back()->with('success', 'socials deleted successfully.');
    }
}
