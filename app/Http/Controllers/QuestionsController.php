<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }

    public function index()
    {
        $questions = Question::latest()->get();

        return view('questions.index', ['questions' => $questions]);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store()
    {
        $slug = $this->extractSlug(request('title'));

        $validatedAttributes = $this->validateQuestion();
        $validatedAttributes['slug'] = $slug;

        Question::create($validatedAttributes);

        return redirect($question->path());
    }

    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
    }

    public function update(Question $question)
    {
        $question->update($this->validateQuestion());

        return redirect($question->path());
    }

    protected function validateQuestion()
    {
        return request()->validate([
                    'title' => ['required', 'max:255'],
                    'excerpt' => 'required',
                    'body' => 'required',
                ]);
    }

    public function extractSlug($title)
    {
        // replace non letter or digits by -
        // $text = preg_replace('~[^\pL\d]+~u', '-', request('title'));
        $text = preg_replace('~[^\pL\d]+~u', '-', $title);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
