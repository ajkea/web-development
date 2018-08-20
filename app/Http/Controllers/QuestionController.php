<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function index()
    {
        return view('static.faq',
            ['questions' => $this->question->all()]
        );
    }
}
