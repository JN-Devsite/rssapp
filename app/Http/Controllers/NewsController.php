<?php

namespace App\Http\Controllers;

use View;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $feed = \Feeds::make('https://feeds.arstechnica.com/arstechnica/technology-lab');

        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
          );

        $items = $feed->get_items();

        foreach($items as $item) {
            $insert_arr = [
                'permalink' => $item->sanitize($item->get_permalink(), SIMPLEPIE_CONSTRUCT_IRI),
                'title' => $item->sanitize($item->get_title(), SIMPLEPIE_CONSTRUCT_TEXT),
                'description' => $item->sanitize($item->get_description(), SIMPLEPIE_CONSTRUCT_MAYBE_HTML),
                'content' => $item->sanitize($item->get_content(), SIMPLEPIE_CONSTRUCT_MAYBE_HTML),
                'post_date' => $item->sanitize($item->get_date('Y-m-d H:i:s'), SIMPLEPIE_CONSTRUCT_TEXT),
                'author' => $item->sanitize($item->get_author()->name, SIMPLEPIE_CONSTRUCT_TEXT)
            ];

            News::upsert($insert_arr, ['permalink'], ['title', 'title', 'description', 'content', 'post_date', 'author']);

        };

        $data = News::all();

        return View::make('feed', ['data' => $data]);
    }

    public function show($id)
    {
        $data = News::find($id);

        return View::make('story', ['data' => $data]);
    }
}
