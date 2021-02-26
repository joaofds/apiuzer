@extends('layout.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Novo Registro</h1>
            <p class="lead">Inserir novos registros na API.</p>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Password</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Digite telefone" required maxlength="11">
                    </div>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('stylecss')
    @include('clients.clients-css')
@endpush
