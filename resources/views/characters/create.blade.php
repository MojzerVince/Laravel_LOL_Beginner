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

        <form action="{{ route('characters.store') }}" method="POST">
            @csrf
            <div class="form-group">
                {{-- Ha van name error adott class-t állítson be --}}
                <label for="name" @error('name') class="error-label" @enderror>Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    {{-- Ha van name error, dobja ki az üzenetet --}}
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" name="level" value="{{ old('level', 1) }}">
            </div>
            <div class="form-group">
                <label for="health">Health</label>
                <input type="number" name="health" value="{{ old('health', 648) }}" min="648">
            </div>
            <div class="form-group-checkbox">
                <label for="ballanced">Ballanced ?</label>
                <input type="checkbox" name="ballanced" value="1" {{ old("ballanced") == 1 ? "checked" : ""  }}>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="7" cols="50">{{ old('description') }}
                    </textarea>
            </div>
            <div style="text-align: center">
                <button class="lol-accept-btn">Add new character</button>
            </div>
        </form>
    </div>
@endsection