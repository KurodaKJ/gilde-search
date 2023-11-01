<?php

namespace App\Http\Controllers;

use App\Models\Sites;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Process the search query and fetch search results.

        // You can use $request->input('query') to get the search query.
        $query = $request->input('query');

        // Implement your search logic to fetch the search results.
        // Here, we'll perform a simple search on the 'title' and 'description' fields.
        $results = Sites::query()
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->get();

        // Return the 'results' view and pass the results and query as data.
        return view('results', ['results' => $results, 'query' => $query]);
    }
}
