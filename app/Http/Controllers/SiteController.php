<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function team()
    {
        return view('team');
    }

    public function quiz()
    {
        $cat = Category::all();
        return view('quiz', ['categories' => $cat]);
    }

    public function quizplay($id)
    {
        $quests = DB::select('select * from questions where questionqategory = ?',[$id]);
        return view('quizplay', ['questions' => $quests]);
    }

    public function quizend($res)
    {
        return view('quizend',compact('res'));

    }
}
