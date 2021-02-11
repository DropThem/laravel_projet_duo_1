<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BackArticleController extends Controller
{
    public function index(){
        $article = Article::all();
        return view('partials.backpages.article', compact('article'));
    }
    public function store(Request $request) {
        $store = New Article;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->title2 = $request->title2;
        $store->save();
        return redirect()->back();
    } 
    public function destroy($id){
        $destroy = Article::find($id);
        $destroy->delete();
        return redirect()->back();
    }
    public function show($id){
        $backShow = Article::find($id);
        return view('partials.backpages.backshow', compact('backShow'));
    }
}
