<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request, Teacher $teacher) {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        Donation::create([
            'teacher_id' => $teacher->id,
            'amount' => $request->amount,
        ]);

        return redirect()->route('teachers.show', $teacher->id)->with('success', 'Donation added successfully.');
    }

    public function show(Teacher $teacher) {
        // pass data to view (wishlist url, paypal, etc)
        return view('donate', [
            'teacherName' => 'Mr. Becker',
            'wishlistUrl' => 'https://www.amazon.com',
            'paypalEmail' => 'roxy.rodriguez@gmail.com'
        ]);
    }
}
