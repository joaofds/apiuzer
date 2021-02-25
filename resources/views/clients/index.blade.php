@extends('layout.main')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">UZER Tecnologia</h1>
            <p class="lead">Teste prático para desenvolvedor.</p>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col mr-5">
                    <a href="#" class="btn btn-lg">
                        <i class="bi bi-people"></i>
                    </a>
                </div>
                <div class="col-sm-1 col">
                    <a href="#" class="btn btn-lg">
                        <i class="bi bi-code-slash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('stylecss')
    @include('clients.clients-css')
@endpush
