<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ProjectController
{
    public function index()
    {
        $projects = Storage::json('/public/projects.json');
        asort($projects);
        
        return view('projects', [
            'title' => 'Projects',
            'projects' => $projects
        ]);
    }
}
