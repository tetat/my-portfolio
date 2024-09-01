<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ExperienceController
{
    public function index()
    {
        $experiences = Storage::json('/public/experiences.json');
        arsort($experiences);
        
        return view('experience', [
            'title' => 'Experience',
            'experiences' => $experiences
        ]);
    }
}
