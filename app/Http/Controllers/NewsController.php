<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // or DB::table('news')->get();
        return view('news/news', compact('news'));
    }
}
