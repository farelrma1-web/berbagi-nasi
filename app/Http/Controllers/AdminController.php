<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donation;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();

        $totalDonations = Donation::count();

        $totalPortions = Donation::sum('portion');

        $donations = Donation::latest()->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalDonations',
            'totalPortions',
            'donations'
        ));
    }
}