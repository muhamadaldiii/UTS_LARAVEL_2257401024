<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'MUHAMAD ALDI',
            'nim' => '2257401024',
            'class' => 'MI22B',
        ];

        return view('home', $data);
    }
    public function logout()
    {
        auth()->logout(); // Logout user
        return redirect('/welcome'); // Arahkan ke halaman welcome setelah logout
    }
}