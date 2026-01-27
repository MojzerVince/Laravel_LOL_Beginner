<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', ['characters' => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        Character::create($request->all());

        /*$newCharacter = new Character($request->all());
        $newCharacter->ballanced = true;
        $newCharacter->save();*/
        return redirect()->route('characters.index')->with('msg', '{request->name} created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', ['character' => $character]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        return redirect()->route('characters.index')->with('msg', '{request->name} created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //
    }
}
