<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events.index');
    }

    public function show($id)
    {
        return view('events.show');
    }

    public function register(Request $request, $id)
    {
        return back()->with('success', 'Inscription enregistree avec succes !');
    }
}
