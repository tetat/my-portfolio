<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomeController
{
    public function index()
    {
        return view('home', [
            'title' => "Home",
            'myself' => Storage::json('/public/users.json')[0]
        ]);
    }
}
