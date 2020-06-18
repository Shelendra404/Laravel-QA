<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function show($questionId)
    {
        $question = Question::find($questionId);

        return view('questions.show', ['question' => $question]);
    }

    public function index()
    {
        $questions = Question::latest()->get();

        return view('questions.index', ['questions' => $questions]);
    }
}
