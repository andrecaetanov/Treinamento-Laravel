@extends('adminlte::page')

@section('title', 'Cadastro de Produto')

@section('content_header')
    <h1>Cadastro de Produto</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="box-body box box-warning">
                <form class="form" method="post" action="">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria_id">
                        <option>Exemplo 1</option>
                        <option>Exemplo 2</option>
                    </select>
                    <label>Preço</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" step=".01" class="form-control" name="nome" value="">
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
