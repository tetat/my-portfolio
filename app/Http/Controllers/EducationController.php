<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class EducationController
{
    public function index()
    {
        $educations = Storage::json('/public/educations.json');
        asort($educations);
        
        return view('education', [
            'title' => 'Education',
            'educations' => $educations
        ]);
    }
}
