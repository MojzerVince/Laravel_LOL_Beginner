@extends('layouts.base')

@section('content')
    <div class="form-container">
        <p>Here is all the details about {{ $character->name }}</p>
        
        <ul>
            <li>Level: {{ $character->level }}</li>
            <li>Health: {{ $character->health }}</li>
        </ul>

        <p>{{ $character->description }} Furthermore: {{$character->name}} is 
            {{ $character->ballanced ? "very ballanced." : "OP as shit." }}</p>

    </div>
@endsection 