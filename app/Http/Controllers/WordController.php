<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        return response()->json(Word::all());
    }

    public function store(Request $request)
    {
        $request->validate(['word' => 'required|string|unique:words,word']);
        $word = Word::create($request->only('word'));
        return response()->json($word, 201);
    }

    public function show($id)
    {
        $word = Word::findOrFail($id);
        return response()->json($word);
    }

    public function update(Request $request, $id)
    {
        $word = Word::findOrFail($id);
        $request->validate(['word' => 'required|string|unique:words,word']);
        $word->update($request->only('word'));
        return response()->json($word);
    }

    public function destroy($id)
    {
        Word::destroy($id);
        return response()->json(['message' => 'Word deleted successfully']);
    }
}
