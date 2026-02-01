@extends('layouts.base')

@section('content')
    @if (session()->has('msg'))
        <p>{{ session()->get('msg') }}</p>
    @endif

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
                    <td>lvl. {{ $item->level }}</td>
                    <td>{{ $item->health }} hp</td>
                    <td><input type="checkbox" disabled {{ $item->ballanced ? 'checked' : '' }}></td>
                    <td class="actions">
                        <form action="{{ route("characters.show", $item) }}"><button class="lol-accept-btn">Mutasd</button>
                        </form>
                        <form action="{{ route("characters.edit", $item) }}"><button class="lol-accept-btn">Szerkeszd</button>
                        </form>
                        <form action="{{ route("characters.destroy", $item) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="lol-accept-btn">Töröld</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection