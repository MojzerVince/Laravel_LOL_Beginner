@extends('layouts.base')

@section('content')
    <div class="form-container">

        {{-- Összes error kilistázása --}}
        @if ($errors->any())
            <div class="error-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('characters.update', $character) }}" method="POST">
            @csrf
            @method("PUT") {{-- Frissítés funkció metódusa --}}
            <div class="form-group">
                {{-- Ha van name error adott class-t állítson be --}}
                <label for="name" @error('name') class="error-label" @enderror>Name</label>
                <input type="text" name="name" value="{{ old('name', $character->name) }}">
                @error('name')
                    {{-- Ha van name error, dobja ki az üzenetet --}}
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" name="level" value="{{ old('level', $character->level) }}">
            </div>
            <div class="form-group">
                <label for="health">Health</label>
                <input type="number" name="health" value="{{ old('health', $character->health) }}" min="648">
            </div>
            <div class="form-group-checkbox">
                <label for="ballanced">Ballanced ?</label>
                <input type="checkbox" name="ballanced" value="1" {{ old("ballanced", $character->ballanced) == 1 ? "checked" : ""  }}>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="7" cols="50">{{ old('description', $character->description) }}
                </textarea>
            </div>
            <div style="text-align: center">
                <button class="lol-accept-btn">Edit this character</button>
            </div>
        </form>
    </div>
@endsection
