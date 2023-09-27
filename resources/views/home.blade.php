@extends('layouts.public')

@section('content')
    <div class="container py-3">
        <table class="tablex">
            <thead>
                <th>ID</th>
                <th>AZIENDA</th>
                <th>STAZIONE DI PARTENZA</th>
                <th>DATA DI PARTENZA</th>
                <th>STAZIONE DI ARRIVO</th>
                <th>ORARIO DI PARTENZA</th>
                <th>ORARIO DI ARRIVO</th>
                <th>CODICE TRENO</th>
                <th>NUMERO CARROZZE</th>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->data_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
