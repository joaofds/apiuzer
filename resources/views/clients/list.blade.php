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
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data/Criação</th>
                            <th scope="col">Data/Atualização</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $cliente)
                        <tr>
                            <th scope="row">{{ $cliente['id'] }}</th>
                        <td>{{ $cliente['nome'] }}</td>
                        <td>{{ $cliente['email'] }}</td>
                        <td>{{ $cliente['telefone'] }}</td>
                        <td>{{ $cliente['created_at'] }}</td>
                        <td>{{ $cliente['updated_at'] }}</td>
                        <td>
                            <a class="edit" id="edit" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill"></i></a>
                            <a class="delete" id="delete"  title="Delete" data-toggle="tooltip"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@push('stylecss')
    @include('clients.clients-css')
@endpush