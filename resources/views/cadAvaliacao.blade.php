@extends('principal')

@section('tituloPagina')
	Cadastro Avaliacao
@stop

@section('corpo')
	<h1>Cadastro da Avaliacão de Desempenho</h1>

	<?php 
		
		//ACHAR UMA FORMA DE BUSCAR OS DADOS DO FUNCIONARIO PARA EXIBIR NA TELA
	?>
	<form action="" method="post">
		<table class="table table-hover">
			<tr>

				<td><input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<input type="hidden" value="{{$funcionario->cod_funcionario}}" name="cod_funcionario">
				<input type="hidden" name="cod_contrato" value="">Nome:</td>
				<td colspan="4"><input class="form-control" type="text" name="nome_funcionario" value=""> </td>
			</tr>
			<tr>
				<td>Cargo:</td>
				<td><input class="form-control" type="text" name="descricao_cargo" value=""> </td>
				<td></td>
				<td>Obra Trabalhada:</td>
				<td><input class="form-control" type="text" name="obra_trabalhada" value=""> </td>
			</tr>
			<tr>
				<td>Data Admissão:</td>
				<td><input class="form-control" type="text" name="data_admissao" value=""> </td>
				<td></td>
				<td>Data Demissão:</td>
				<td><input class="form-control" type="text" name="data_demissao" value=""> </td>
			</tr>
			<tr>
				<td>Observações:</td>
				<td colspan="4"><textarea class="form-control" name="observacoes_contrato">TEXTO VAI AQUI</textarea> </td>
			</tr>
			<tr>		
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>		
				<td colspan="2">ITENS AVALIADOS</td>
				<td>PESO</td>
				<td colspan="3"></td>
			</tr>
			<tr>		
				<td colspan="2">Conhecimentos Praticos</td>
				<td>1</td>
				<td colspan="5">
					<input type="radio" name="conhecimento_pratico" value="1"> 1 - Ruim
					<input type="radio" name="conhecimento_pratico" value="2"> 2 - Regular
					<input type="radio" name="conhecimento_pratico" value="3"> 3 - Bom
					<input type="radio" name="conhecimento_pratico" value="4"> 4 - Otimo
					<input type="radio" name="conhecimento_pratico" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Relacionamento com Superior Imediato</td>
				<td>2</td>
				<td colspan="5">
					<input type="radio" name="relacionamento_superior" value="1"> 1 - Ruim
					<input type="radio" name="relacionamento_superior" value="2"> 2 - Regular
					<input type="radio" name="relacionamento_superior" value="3"> 3 - Bom
					<input type="radio" name="relacionamento_superior" value="4"> 4 - Otimo
					<input type="radio" name="relacionamento_superior" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Relacionamento com a Equipe</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="relacionamento_equipe" value="1"> 1 - Ruim
					<input type="radio" name="relacionamento_equipe" value="2"> 2 - Regular
					<input type="radio" name="relacionamento_equipe" value="3"> 3 - Bom
					<input type="radio" name="relacionamento_equipe" value="4"> 4 - Otimo
					<input type="radio" name="relacionamento_equipe" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Respeita as normas da Empresa</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="respeita_normas" value="1"> 1 - Ruim
					<input type="radio" name="respeita_normas" value="2"> 2 - Regular
					<input type="radio" name="respeita_normas" value="3"> 3 - Bom
					<input type="radio" name="respeita_normas" value="4"> 4 - Otimo
					<input type="radio" name="respeita_normas" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Assíduo</td>
				<td>3</td>
				<td colspan="4">
					<input type="radio" name="assiduidade" value="1"> 1 - Ruim
					<input type="radio" name="assiduidade" value="2"> 2 - Regular
					<input type="radio" name="assiduidade" value="3"> 3 - Bom
					<input type="radio" name="assiduidade" value="4"> 4 - Otimo
					<input type="radio" name="assiduidade" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">EPIs usados de forma Correta</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="epis_correto" value="1"> 1 - Ruim
					<input type="radio" name="epis_correto" value="2"> 2 - Regular
					<input type="radio" name="epis_correto" value="3"> 3 - Bom
					<input type="radio" name="epis_correto" value="4"> 4 - Otimo
					<input type="radio" name="epis_correto" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Cuidadoso com suas Ferramentas</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="cuidado_ferramentas" value="1"> 1 - Ruim
					<input type="radio" name="cuidado_ferramentas" value="2"> 2 - Regular
					<input type="radio" name="cuidado_ferramentas" value="3"> 3 - Bom
					<input type="radio" name="cuidado_ferramentas" value="4"> 4 - Otimo
					<input type="radio" name="cuidado_ferramentas" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Dinâmico</td>
				<td>3</td>
				<td colspan="4">
					<input type="radio" name="dinamico" value="1"> 1 - Ruim
					<input type="radio" name="dinamico" value="2"> 2 - Regular
					<input type="radio" name="dinamico" value="3"> 3 - Bom
					<input type="radio" name="dinamico" value="4"> 4 - Otimo
					<input type="radio" name="dinamico" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Comportamento dentro da Obra</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="comportamento_obra" value="1"> 1 - Ruim
					<input type="radio" name="comportamento_obra" value="2"> 2 - Regular
					<input type="radio" name="comportamento_obra" value="3"> 3 - Bom
					<input type="radio" name="comportamento_obra" value="4"> 4 - Otimo
					<input type="radio" name="comportamento_obra" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Comportamento dentro do Alojamento</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="comportamento_alojamento" value="1"> 1 - Ruim
					<input type="radio" name="comportamento_alojamento" value="2"> 2 - Regular
					<input type="radio" name="comportamento_alojamento" value="3"> 3 - Bom
					<input type="radio" name="comportamento_alojamento" value="4"> 4 - Otimo
					<input type="radio" name="comportamento_alojamento" value="0"> Não Aplicavel
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Salvar Avaliação"></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		
	
	</form>


@stop