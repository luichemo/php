<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
{
    $quizzes = Quiz::all(); 

    return view('main')->with('quizzes', $quizzes);
}
}
