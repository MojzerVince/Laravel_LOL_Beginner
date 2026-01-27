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
        return view('characters.index', ["characters" => $characters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("characters.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        /* Basic verzió, minden input mező stimmel */
        /* Az input mező neve ugyanaz mint az oszlopok neve és minden kötelező mező ki van töltve az inputok által */
        Character::create($request->all());

        /* Objektum felőli megközelítés, amennyiben tárolás előtt valamit csinálni kell */
        /* $newCharacter = new Character($request->all());
        $newCharacter->ballanced = true;
        $newCharacter->secondTESTname = $request->name;
        $newCharacter->save(); */

        //return back(); //Visszaküldi oda a usert, ahonnan a kérés jött
        return redirect()->route("characters.index")->with("msg", "{$request->name} was added successfuly to the database.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view("characters.show", ["character" => $character]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view("characters.edit", ["character" => $character]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $character->update($request->all());

        return redirect()->route("characters.index")->with("msg", "{$request->name} was updated successfuly in the database.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
         return redirect()->route("characters.index")->with("msg", "{$character->name} was deleted successfuly from the database.");
    }
}
