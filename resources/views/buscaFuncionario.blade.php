@extends('principal')

@section('tituloPagina')
	Funcionarios
@stop

@section('corpo')
<h1>Funcionarios</h1>
	
	<table class="table">
		@foreach($funcionarios as $funcionario)
		<form action="/labengenharia/public/busca/avaliacao/redirect" method="GET">
		<tr>
			<td> {{$funcionario->cpf_funcionario}} </td>
			<td> {{$funcionario->nome_funcionario}} </td>
			<td> {{$funcionario->telefone1}}
				<input type="hidden" name="cod_funcionario" value="{{$funcionario->cod_funcionario}}"> </td>
			<td> <input type="submit" class="btn btn-primary" value="VER AVALIAÇÃO"> </td>
		</tr>
		</form>
		@endforeach
	</table>
	
@stop
