@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <a href="categorias/create">
        <button class="btn btn-success btn-flat btn-cadastro">Cadastrar Categoria</button>
    </a>
    <div class="row">
	    <div class="col-md-6">
		    <table class="table table-striped box box-warning">
			    <thead>
				    <tr>
                        <th>Nome</th>
                        <th>Editar</th>
                        <th>Excluir</th>
				    </tr>
			    </thead>
			    <tbody>
                    <tr>
                        <td>Exemplo</td>
                        <td>
                            <a href="">
                                <span class="fa fa-edit fa-2x"></span>
                            <a>
                        </td>
                        <td>
                            <a href="">
                                <span class="fa fa-trash-o fa-2x"></span>
                            <a>
                        </td>
                    </tr>
                    <tr>
                        <td>Exemplo</td>
                        <td>
                            <a href="">
                                <span class="fa fa-edit fa-2x"></span>
                            <a>
                        </td>
                        <td>
                            <a href="">
                                <span class="fa fa-trash-o fa-2x"></span>
                            <a>
                        </td>
                    </tr>
                    <tr>
                        <td>Exemplo</td>
                        <td>
                            <a href="">
                                <span class="fa fa-edit fa-2x"></span>
                            <a>
                        </td>
                        <td>
                            <a href="">
                                <span class="fa fa-trash-o fa-2x"></span>
                            <a>
                        </td>
                    </tr>
				</tbody>
			</table>
		</div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
