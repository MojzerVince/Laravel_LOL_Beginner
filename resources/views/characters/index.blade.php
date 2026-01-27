@extends('layouts.base')

@section('content')
    <table>
        <thead>
            <th>Cigány</th>
            <th>Szint</th>
            <th>Élet</th>
            <th>Egyenlőség</th>
            <th>Akciók</th>
        </thead>
        <tbody>
            @foreach ($characters as $item)
                <tr class="datarow">
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->health }} HP</td>
                    <td><input type="checkbox" disabled {{$item->ballanced ? "checked" : ""}}></td>
                    <td class="actions">
                        <form action=""><button class="lol-characters">Mutasd</button></form>
                        <form action="{{ route('characters.edit', $item->id) }}"><button
                                class="lol-characters">Szerkeszd</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection