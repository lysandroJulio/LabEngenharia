@extends('principal')

@section('tituloPagina')
	Funcionarios
@stop

@section('corpo')
<h1>Funcionarios</h1>
	<form action="/labengenharia/public/busca/avaliacao/{id}" method="GET">
	<table class="table">
		@foreach($funcionarios as $funcionario)
		<tr>
			<td> {{$funcionario->cpf_funcionario}} </td>
			<td> {{$funcionario->nome_funcionario}} </td>
			<td> {{$funcionario->telefone1}} </td>
			<td> <input type="submit" class="btn btn-primary" value="VER AVALIAÇÃO"> </td>
		</tr>
		@endforeach
	</table>
	</form>
@stop
