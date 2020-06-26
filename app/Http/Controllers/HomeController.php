<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = Question::where('user_id', Auth::user()->id)->get();
        if (!$questions) {
            abort(404);
        }

        // return Auth::user();
        //return Auth::user()->name;
        $user = User::where('id', Auth::user()->id)->first();
        return view('profile', [
                        'questions' => $questions,
                        'user' => $user,
                    ]);
    }
}
