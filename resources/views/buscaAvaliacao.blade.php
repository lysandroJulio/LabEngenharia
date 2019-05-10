@extends('principal')

@section('tituloPagina')
	Busca Avaliação
@stop

@section('corpo')
<br>
<h1>Adicionar Avaliação de Desempenho</h1>
<table class="table">
	<tr>
		<td>	
			<label>Digite o nome do funcionario:</label>
		</td>
		<form action="pesquisa do nome com like %nome%" method="get">
			<td>
				<input type="text" class="form-control" name="busca_funcionario">
			</td>
			<td>
				<button class="btn btn-primary">Buscar</button>
			</td>
		</form>
	<tr>
</table>

<table class="table">
	
		
	@foreach($funcionarios as $funcionario)
	<tr>
		<td> {{$funcionario->cpf_funcionario}} </td>
		<td> {{$funcionario->nome_funcionario}} </td>
		<td> {{$funcionario->telefone1}} </td>
	<form action="/labengenharia/public/cadastro/avaliacao/redirect" method="get">
		<td><input type="hidden" name="cod_funcionario" value= "{{$funcionario->cod_funcionario}}"></td>
		<td> <input type="submit" class="btn btn-warning" value="ADICIONAR AVALIAÇÃO"> </td>
	</tr>
	</form>
	@endforeach
</table>

@stop