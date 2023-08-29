@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ url('pessoa/new') }}">Incluir Pessoa</a>
                        <a class="btn btn-primary m-3" href="{{ url('/home') }}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Lista de Pessoas</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pessoa as $p)
                                    <tr>
                                        <th scope="row">{{ $p->id }}</th>
                                        <td>{{ $p->nome }}</td>
                                        <td>{{ $p->cpf }}</td>
                                        <td>{{ $p->tipo }}</td>
                                        <td>{{ $p->telefone }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>
                                            <a href="pessoa/{{ $p->id }}/edit" class="btn btn-info">Editar</a>
                                        </td>
                                        <td>
                                            <form action="pessoa/delete/{{ $p->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
