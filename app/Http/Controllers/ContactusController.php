<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            $request->validate([
                'name' => 'nullable|string|max:100',
                'email' => 'nullable|email|max:100',
                'phone' => 'nullable|string|max:15',
                'city' => 'nullable|string|max:100',
                'service' => 'nullable|string|max:100',
                'budget' => 'nullable|string|max:50',
                'message' => 'nullable|string',
            ]);
    
    
            ContactUs::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'city' => $request->city,
                'service' => $request->service,
                'budget' => $request->budget,
                'message' => $request->message,
            ]);
    
            return back()->with('success', 'Thank you for contacting us!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactus $contactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactus $contactus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactus $contactus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactus $contactus)
    {
        //
    }
}
