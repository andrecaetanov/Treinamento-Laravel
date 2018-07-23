@extends('adminlte::page')

@section('title', 'Cadastro de Produto')

@section('content_header')
    <h1>Cadastro de Produto</h1>
@stop

@section('content')
    <div class="row">
        <form class="form" method="post" action="">
            <div class="col-md-4">
                <div class="box-body box box-warning">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria_id"></select>
                    <label>Preço</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input type="text" class="form-control" name="nome" value="">
                    </div>
                    <button type="submit" class="btn btn-success btn-flat btn-salvar">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
