@extends('layouts.base')

@section('content')
    <div class="form-container">
        <form action="{{ route('characters.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="Buzeráns">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" id="level" name="level" value="300">
            </div>
            <div class="form-group">
                <label for="health">Health</label>
                <input type="number" id="health" name="health" value="500">
            </div>
            <div class="form-group-checkbox">
                <label for="ballanced">Ballanced</label>
                <input type="checkbox" id="ballanced" name="ballanced" checked>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="4" cols="50">NIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGERNIGGER</textarea>
            </div>
            <div style="text-align: center">
                <button class="addButton">Add new cigány</button>
            </div>
        </form>
    </div>
@endsection