<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class MainController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }


    public function contact()
    {
        return view('frontend.contact');
    }

    public function demo()
    {
        return view('frontend.demo');
    }


   public function submit(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'class' => 'required|string|max:50',
        'message' => 'nullable|string|max:1000',
    ]);

    Student::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->phone,
        'class' => $request->class,
        'message' => $request->message,
        'status' => 'pending',
    ]);

    return back()->with('success', 'Your registration has been submitted successfully!');
}
}
