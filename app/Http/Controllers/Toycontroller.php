<?php

namespace App\Http\Controllers;

use App\Models\Toy;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::orderBy('name')->get();

        return view('toys.index', compact('toys'));
    }

    public function show(Toy $toy)
    {
        return view('toys.show', compact('toy'));
    }
}
