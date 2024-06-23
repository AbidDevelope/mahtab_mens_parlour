<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.index');
    }


    public function about()
    {
        return view('layouts.about');
    }
    
    public function service()
    {
        return view('layouts.service');
    }
    
    public function contact()
    {
        return view('layouts.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AppointmentBooking(Request $request)
    {
        Validator::make($request->all(),[
            'age' => 'required|max:2',
            'name' => 'required|max:255',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required|max:255'
        ]);

        Appointment::create($request->all());
        return redirect('index')->with('success', 'Please visit the shop!');
    }

    /**
     * Contact Forms
     */
    public function contact_form(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'message' => 'required|max:255',
            'name' => 'required|max:50',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
         ]);
         
         ContactForm::create($request->all());
         return redirect()->back()->with('message', 'Your Data Successfully Submit.');
         
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "OKKKKKKKK";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}