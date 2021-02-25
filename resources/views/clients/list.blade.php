@extends('layout.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Clientes</h1>
            <p class="lead">Listagem de clientes cadastrados na API.</p>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead class="bg-info">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('stylecss')
    @include('clients.clients-css')
@endpush
