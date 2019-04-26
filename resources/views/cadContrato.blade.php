@extends('principal')

@section('tituloPagina')
	Cadastro de Funcionario
@stop

@section('corpo')
	
	<form action="/labengenharia/public/cadastro/contrato/adicionar" method="post">
		<h1>Adicionando o Contrato do funcionario </h1> 
		@//{{old('nome_funcionario')}}
		<table class="table">
			<tr>
				<td>Data de Admissão:</td>
				<td><input class="form-control" type="text" name="data_admissao"> </td>
			</tr>
			<tr>
				<td>Entrou com ação judicial:</td>
				<td><input type="radio" name="acao_judicial" value="1"> Sim
					<input type="radio" name="acao_judicial" value="0"> Nao
				</td>
			</tr>
			<tr>
				<td>Testemunhou em ação judicial:</td>
				<td><input type="radio" name="testemunha_judicial" value="1"> Sim
					<input type="radio" name="testemunha_judicial" value="0"> Nao
				</td>
			</tr>
			<tr>
				<td>Observações:</td>
				<td><textarea class="form-control" name="observacoes_contrato"> </textarea> </td>
			</tr>
			<tr>
				<td>Obra Trabalhada:</td>
				<td>
					<input class="form-control" type="text" name="obra_trabalhada">
					<input class="form-control" type="text" value="<?php $cod_funcionario ?>" name="cod_funcionario">

				</td>
			</tr>
			<tr>		
				<td><input class="btn btn-success" type="submit" value="Adicionar"></td>
				<td></td>
			</tr>		
		</table>	
	</form>

@stop