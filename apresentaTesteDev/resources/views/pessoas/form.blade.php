@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ url('/pessoa') }}">Voltar</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Request::is('*/edit'))
                            <form action="{{ url('pessoa/update') }}/{{ $pessoa->id }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="nome"
                                        placeholder="Digite o Nome" value="{{ $pessoa->nome }}">
                                </div>
                                <div class="form-group">
                                    <label for="cpf">cpf</label>
                                    <input type="number" name="cpf" class="form-control" id="cpf"
                                        placeholder="Digite o CPF" value="{{ $pessoa->cpf }}">
                                </div>
                                <div class="form-group ">
                                    <label for="tipo">Tipo</label>
                                    <select name="tipo" class="form-select" aria-label="Default select example" >
                                        <option value="{{ $pessoa->tipo }}">
                                            @if ($pessoa->tipo == 1)
                                                Fisica
                                            @else
                                                Juridica
                                            @endif
                                        </option>
                                        <option value="1">Fisica</option>
                                        <option value="2">Juridica</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Digite o Telefone" value="{{ $pessoa->telefone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite o E-mail" value="{{ $pessoa->email }}">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Cadastrat</button>
                            </form>
                        @else
                            <form action="{{ url('pessoa/add') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="nome"
                                        placeholder="Digite o Nome">
                                </div>
                                <div class="form-group">
                                    <label for="cpf">cpf</label>
                                    <input type="number" name="cpf" class="form-control" id="cpf"
                                        placeholder="Digite o CPF">
                                </div>
                                <div class="form-group mt-3">
                                    <select name="tipo" class="form-select" aria-label="Default select example">
                                        <option selected>Selecione o tipo</option>
                                        <option value="1">Fisica</option>
                                        <option value="2">Juridica</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="number" name="telefone" class="form-control" id="telefone"
                                        placeholder="Digite o Telefone">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Digite o E-mail">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Cadastrat</button>
                            </form>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
