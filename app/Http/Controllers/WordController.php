<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Show the form for submitting words.
     */
    public function form()
    {
        return view('form');
    }

    /**
     * Receive submitted words.
     */
    public function receive(Request $request)
    {
        $validated = $request->validate([
            'word' => [
                'size:4',
                'min:3',
                'max:5',
                'exists:words,name',
            ],
        ]);

        dd($validated);
    }
}
