@extends('layouts.base')

@section('content')
    <table>
        <thead>
            <th>Name</th>
            <th>Level</th>
            <th>Health</th>
            <th>Ballanced</th>
        </thead>
        <tbody>
            @foreach($characters as $item)
                <tr class="datarow">
                    <td>{{ $item->name }}</td>
                    <td>lvl. {{ $item->level }}</td>
                    <td>{{$item->health}} hp</td>
                    <td><input type="checkbox" disabled {{$item->ballanced ? "checked" : ""}}></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection