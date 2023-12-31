@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pagina Inicial</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bem Vindo</h1>
                    <a class="btn btn-primary" href="{{ url('pessoa') }}">Lista de Pessoas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
