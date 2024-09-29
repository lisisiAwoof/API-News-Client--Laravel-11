<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
class NewsController extends Controller
{
    public function getLatestNews()
    {
        $apiKey = env('NEWS_API_KEY'); 
        $url = 'https://newsapi.org/v2/top-headlines';
        
        $response = Http::withOptions(['verify' => false])->get($url, [
            'country' => 'us',
            'apiKey' => $apiKey,
        ]); 
        
        if ($response->successful()) {
            $newsData = $response->json();
            return view('news', ['articles' => $newsData['articles']]);
        } else {
            return response()->json(['error' => 'Tidak bisa mengambil berita']);
        }
    }
}
