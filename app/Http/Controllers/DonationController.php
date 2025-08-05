<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index() {
        // pass data to view (wishlist url, paypal, etc)
        return view('donate', [
            'teacherName' => 'Mr. Becker',
            'wishlistUrl' => 'https://www.amazon.com',
            'paypalEmail' => 'roxy.rodriguez@gmail.com'
        ]);
    }
}
