@extends('principal')

@section('tituloPagina')
	Funcionarios
@stop

@section('corpo')
<h1>Funcionarios</h1>
	<table class="table">
		@foreach($funcionarios as $funcionario)
		<tr>
			<td> {{$funcionario->cpf_funcionario}} </td>
			<td> {{$funcionario->nome_funcionario}} </td>
			<td> {{$funcionario->telefone1}} </td>
		</tr>
		@endforeach
	</table>
@stop
