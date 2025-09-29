<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Student;
use App\Models\Subscription;
use Illuminate\Support\Carbon;

class ProfileController extends Controller
{

 public function dashboard()
    {
        $totalStudents = Student::count();
        $activeStudents = Student::where('status', 'active')->count();
        $pendingStudents = Student::where('status', 'pending')->count();
        $inactiveStudents = Student::where('status', 'inactive')->count();

        return view('dashboard', compact('totalStudents', 'activeStudents', 'pendingStudents', 'inactiveStudents'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    function students()
    {
        $students =  Student::orderby('id','desc')->get();
        return view('profile.student', compact('students'));
    }



    function viewStudent($id)
    {
        $student = Student::findOrFail($id);

    // Get active subscription (if any)
    $activeSubscription = $student->subscriptions()
        ->where('status', 'active')
        ->whereDate('end_date', '>=', Carbon::now())
        ->latest('end_date')
        ->first();

    return view('profile.view_student', compact('student', 'activeSubscription'));
    }

public function activateStudent(Request $request, $id)
{
    $student = Student::findOrFail($id);

    // Check if student already has active subscription
    $existing = $student->subscriptions()
        ->where('status', 'active')
        ->whereDate('end_date', '>=', Carbon::now())
        ->first();

    if ($existing) {
        return redirect()->back()->with('error', 'Student already has an active subscription.');
    }

    $plan = $request->input('plan');
    if (!in_array($plan, ['6_months','1_year'])) {
        return redirect()->back()->with('error', 'Invalid plan selected.');
    }

    $start_date = Carbon::now();
    $end_date = $plan === '1_year' ? $start_date->copy()->addYear() : $start_date->copy()->addMonths(6);

    Subscription::create([
        'student_id' => $student->id,
        'plan' => $plan,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'status' => 'active',
    ]);

    $student->status = 'active';
    $student->save();

    return redirect()->back()->with('success', 'Subscription activated successfully.');
}
}
