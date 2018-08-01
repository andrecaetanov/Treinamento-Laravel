@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <a href="{{ route('produtos.create') }}">
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
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->categoria->nome }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>
                                <a href="{{ route('produtos.edit', $produto) }}">
                                    <span class="fa fa-edit fa-2x"></span>
                                <a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('produtos.destroy', $produto) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-link" type="submit">
                                        <span class="fa fa-trash-o fa-2x"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
				</tbody>
			</table>
		</div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
