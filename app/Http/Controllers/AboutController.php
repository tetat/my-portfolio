<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController
{
    public function index()
    {
        return view('about', [
            'title' => 'About'
        ]);
    }
}
