@extends('layouts.base')

@section('content')
    <div class="form-container">
        <form action="{{ route("characters.store") }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="Heimerdinger">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" name="level" value="6">
            </div>
            <div class="form-group">
                <label for="health">Health</label>
                <input type="number" name="health" value="1234">
            </div>
            <div class="form-group-checkbox">
                <label for="ballanced">Ballanced ?</label>
                <input type="checkbox" name="ballanced" value="1">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="7" cols="50">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, autem minima est ratione ex libero illo porro. Similique dolor repellendus veniam sunt dicta earum ea aperiam dolores, facere nihil numquam.
                    </textarea>
            </div>
            <div style="text-align: center">
                <button class="lol-accept-btn">Add new character</button>
            </div>
        </form>
    </div>
@endsection