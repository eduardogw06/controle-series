<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    function index (Request $request) {
        $series = [
            'The Walking Dead',
            'Prison Break',
            'How I meet your mother'
        ];

        return view('series.index', compact('series'));
    }
}
