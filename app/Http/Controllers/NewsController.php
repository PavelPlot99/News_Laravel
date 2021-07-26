<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        if (session()->has('city_id')) {
            $news = News::where('city_id', session('city_id'))->orWhere('city_id', null)->get();
        } else {
            $news = News::all();
        }
        $city = City::all();
        return view('index', [
            'news' => $news,
            'cities' => $city,
        ]);
    }

    public function show($news)
    {
        $news = News::find($news);
        $related_news = News::where('category_id', $news->category_id)->where('id', '!=', $news->id)->orderByRaw('RAND()')->get();

        return view('showNews', ['news' => $news, 'related_news' => $related_news]);
    }

    public function create()
    {
        return view('addNews',
            [
                'categories' => Category::all(),
                'cities' => City::all(),
            ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/image');
            $data['news']['image'] = $path;
        }
        $news = News::create($data['news']);

        return redirect()->route('index.news');
    }

    public function search(Request $request)
    {
        if (isset($request->title)) {
            $search_result = News::where('title', 'LIKE', $request->title . '%')->get();
        } else {
            $search_result = null;
        }

        return view('search', ['news' => $search_result]);
    }

}
