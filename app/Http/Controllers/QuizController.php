<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz; 

class QuizController extends Controller
{
    public function create()
    {
        return view('create'); 
    }

    public function edit($id)
    {
        $quiz = Quiz::find($id);
        return view('edit', ['quiz' => $quiz]);
    }

    public function store(Request $request, $id = null)
    {
        $rules = [
            'name' => 'required|string|max:255',
        ];

        $request->validate($rules);

        if ($id) {
            
            $quiz = Quiz::find($id);
        } else {
            
            $quiz = new Quiz;
        }

        $quiz->name = $request->input('name');
        

        $quiz->save();

        
        return redirect('/quizzes');
    }
}