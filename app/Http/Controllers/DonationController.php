<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::latest()->get();

        return view('donations.index', compact('donations'));
    }

    public function create()
    {
        return view('donations.create');
    }

 public function store(Request $request)
{
    $imagePath = null;

    if ($request->hasFile('image')) {

        $imagePath = $request->file('image')
            ->store('donations', 'public');
    }

   Donation::create([

    'user_id' => auth()->id(),

    'title' => $request->title,

    'description' => $request->description,

    'portion' => $request->portion,

    'location' => $request->location,

    'phone' => $request->phone,

    'image' => $imagePath,

]); 

    return redirect('/admin/dashboard')
        ->with('success', 'Donasi berhasil ditambahkan');
}
    public function edit(Donation $donation)
    {
    return view('donations.edit', compact('donation'));
    }

    public function update(Request $request, Donation $donation)
{
    $donation->update([
        'title' => $request->title,
        'description' => $request->description,
        'portion' => $request->portion,
        'location' => $request->location,
        'phone' => $request->phone,
    ]);

    return redirect('/donations')
        ->with('success', 'Donasi berhasil diupdate');
}

public function destroy(Donation $donation)
{
    $donation->delete();

    return redirect('/donations')
        ->with('success', 'Donasi berhasil dihapus');
}
}