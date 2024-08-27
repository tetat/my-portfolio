<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillsController
{
    public function index()
    {
        $skills = Storage::json('/public/skills.json');
        asort($skills);
        
        return view('skills', [
            'title' => 'Skills',
            'skills' => $skills
        ]);
    }
}
