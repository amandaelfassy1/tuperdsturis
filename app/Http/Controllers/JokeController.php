<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;

class JokeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $data = $request->json()->all();


        $todo = Joke::insert([
            'text' => $data['text'],
            'theme' => $data['theme'],
            'audio' => $data['audio'],
        ]);

        return response()->json([
            "text" => $todo,
            "message" => "Blague créée"
        ], 201);
    }

    public function index()
    {
        return response()->json([
            'jokes' => Joke::get(),
        ]);
    }

    public function showTheme($id)
    {
        $joke = Joke::where('theme', $id)->get();

        if (!$joke) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($joke);
    }

    public function joke($id)
    {
        $joke = Joke::where('theme', $id)->get()->random(10);

        if (!$joke) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($joke);
    }
}
