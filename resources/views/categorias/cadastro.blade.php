@extends('adminlte::page')

@section('title', 'Cadastro de Categoria')

@section('content_header')
    <h1>Cadastro de Categoria</h1>
@stop

@section('content')
    <div class="row">
        <form class="form" method="post" action="">
            <div class="col-md-4">
                <div class="box-body box box-warning">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="">
                    <button type="submit" class="btn btn-success btn-flat btn-salvar">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
