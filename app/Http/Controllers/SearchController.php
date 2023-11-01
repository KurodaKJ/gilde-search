<?php

namespace App\Http\Controllers;

use App\Models\Sites;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Process the search query and fetch search results.
        $query = $request->input('query');

        // Implement your search logic to fetch the search results.
        $results = Sites::query()
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        // Modify the results to include the URL.
        $results = $results->map(function ($result) {
            // Assuming you have a 'url' field in your Sites model.
            $result['url'] = $result->url;

            return $result;
        });

        // Return the 'results' view and pass the results and query as data.
        return view('results', ['results' => $results, 'query' => $query]);
    }
}
