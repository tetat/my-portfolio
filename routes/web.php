<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/skills', [SkillsController::class, 'index']);
Route::get('/experience', [ExperienceController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/education', [EducationController::class, 'index']);
