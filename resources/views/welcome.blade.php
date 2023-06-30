@extends('layouts.app')

@section('content')
    <div class="container my-3">

        <h1>ORARI TRENI</h1>
        <div class="row g-4">
            <div class="col">

                <form class="row w-100 d-flex justify-content-start" action="/" method="GET">
                    <div class="mb-3 col-3">
                        <label for="company" class="form-label">Company:</label>
                        <input type="text" class="form-control" id="company" name="company">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="train_code" class="form-label">Train Code:</label>
                        <input type="text" class="form-control" id="train_code" name="train_code">
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <button onclick="queryReset()" type="reset" class="btn btn-danger mt-3 ">Cancella</button>
                        <button type="submit" class="btn btn-primary mt-3 ms-3">Invia</button>


                    </div>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Data Partenza</th>
                            <th scope="col">Partenza</th>
                            <th scope="col">Destinazione</th>
                            <th scope="col">Orario Partenza</th>
                            <th scope="col">Orario Arrivo</th>
                            <th scope="col">Numero Treno</th>
                            <th scope="col">Stato Treno</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_date }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                                @if ($train->cancelled == 1)
                                    <td>cancellato</td>
                                @else
                                    <td>In orario</td>
                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection


<script>
    function queryReset() {
        window.location.href = "/";
    }
</script>
