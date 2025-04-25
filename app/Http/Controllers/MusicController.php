<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musicList = Music::all();
        return view('music.index', compact('musicList'));
    }

    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre' => 'required'
        ]);

        Music::create($request->all());
        return redirect()->route('music.index')->with('success', 'Music added successfully!');
    }

    public function show(Music $music)
    {
        return view('music.show', compact('music'));
    }

    public function edit(Music $music)
    {
        return view('music.edit', compact('music'));
    }

    public function update(Request $request, Music $music)
    {
        $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre' => 'required'
        ]);

        $music->update($request->all());
        return redirect()->route('music.index')->with('success', 'Music updated successfully!');
    }

    public function destroy(Music $music)
    {
        $music->delete();
        return redirect()->route('music.index')->with('success', 'Music deleted successfully!');
    }
}