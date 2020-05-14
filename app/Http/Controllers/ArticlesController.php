<?php

namespace App\Http\Controllers;

use App\Articles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();

        return new Response($articles);
    }

    public function form()
    {
        return view('article');
    }

    public function create(Request $request)
    {
        $user_id = $request->input('user_id');
        $title = $request->input('title');
        $content = $request->input('content');

        $user = User::find($user_id);

        if ($user === null) {
            return new Response(['message' => 'User not found'], 412);
        }

        $article = new Articles();
        $article->user()->associate($user);
        $article->title = $title;
        $article->content = $content;

        if ($article->save()) {
            return new Response($article);
        } else {
            return new Response(null, 500);
        }
    }
}
