<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addFavoritesNews(Request $request)
    {
        $news_id = $request->news_id;
        $user = User::find(Auth::user()->id);
        $user->news()->attach($news_id);

        return redirect()->route("show.news",['news' => $news_id]);
    }

    public function indexFavorites()
    {
        $user = User::find(Auth::user()->id);

        return view('favoritesNews', ['user' => $user]);
    }
}
