<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;

class WelcomeController extends Controller
{
    public function showWelcomePage()
    {
        $lokasi = Lokasi::all();
        return view('welcome', compact('lokasi'));
    }

    public function handleFormSubmission(Request $request)
    {
        // Handle form submission logic here
        // You can access the selected location ID using $request->input('lokasi_id')

        // For example, redirect to a new page
        return redirect('/dashboard');
    }
}
