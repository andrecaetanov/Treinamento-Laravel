@extends('adminlte::page')

@section('title', 'Cadastro de Produto')

@section('content_header')
    <h1>Cadastro de Produto</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
             <div class="box-body box box-warning">
                @if(isset($produto))
                <form class="form" method="post" action="{{ route('produtos.update', $produto) }}">
                    @method('PUT')
                @else
                <form class="form" method="post" action="{{ route('produtos.store') }}">
                @endif
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ @$produto->nome }}">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria_id">
                        @foreach ($categorias as $categoria)
                            @if(@$produto->categoria->id === $categoria->id)
                            <option selected value="{{ $categoria->id }}" name="categoria_id">{{ $categoria->nome }}</option>
                            @else
                            <option value="{{ $categoria->id }}" name="categoria_id">{{ $categoria->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label>Preço</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="number" step=".01" class="form-control" name="preco" value="{{ @$produto->preco }}">
                    </div>
                    <button type="submit" class="btn btn-success btn-flat btn-salvar">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
