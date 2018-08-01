@extends('adminlte::page')

@section('title', 'Cadastro de Categoria')

@section('content_header')
    <h1>Cadastro de Categoria</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="box-body box box-warning">
                @if(isset($categoria))
                <form class="form" method="post" action="{{ route('categorias.update', $categoria) }}">
                    @method('PUT')
                @else
                <form class="form" method="post" action="{{ route('categorias.store') }}">
                @endif
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ @$categoria->nome }}">
                    <button type="submit" class="btn btn-success btn-flat btn-salvar">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
