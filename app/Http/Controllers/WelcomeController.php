<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class WelcomeController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('welcome')->with('news',$news);
    }
}