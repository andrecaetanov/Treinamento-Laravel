@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <a href="produtos/create">
        <button class="btn btn-success btn-flat btn-cadastro">Cadastrar Produto</button>
    </a>
    <div class="row">
	    <div class="col-md-8">
		    <table class="table table-striped box box-warning">
			    <thead>
				    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Editar</th>
                        <th>Excluir</th>
				    </tr>
			    </thead>
			    <tbody>
                    <tr>
                        <td>Exemplo</td>
                        <td>Exemplo</td>
                        <td>R$ 100.00</td>
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
                        <td>Exemplo</td>
                        <td>R$ 100.00</td>
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
                        <td>Exemplo</td>
                        <td>R$ 100.00</td>
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
