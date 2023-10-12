<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class WebCrawlerController extends Controller
{
    public function crawl(Request $request)
    {
        $url = $request->input('start_url');
        $client = new Client();
        $crawler = $client->request('GET', $url);

        // Extract and store data in the database
        $title = $crawler->filter('title')->text();
        $description = $crawler->filter('meta[name="description"]')->attr('content');
        $keywords = $crawler->filter('meta[name="keywords"]')->attr('content');

        // Save the data to the database or perform other actions
        // ...

        // Return a response or view
        return view('crawler.result', [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
        ]);
    }
}
