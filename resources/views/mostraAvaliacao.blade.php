@extends('principal')

@section('tituloPagina')
	Cadastro Avaliacao
@stop

@section('corpo')
<br>
	<h1>Avaliacão de Desempenho</h1>
	<div class="container">
	<form action="/labengenharia/public/busca/funcionarios/" method="get">
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td colspan="4"><input class="form-control" type="text" name="nome_funcionario" value="{{$funcionario[0]->nome_funcionario}}"  disabled> </td>
			</tr>
			<tr>
				<td>Cargo:</td>
				<td><input class="form-control" type="text" name="descricao_cargo" value="{{$funcionario[0]->descricao_cargo}}"  disabled> </td>
				<td></td>
				<td>Obra Trabalhada:</td>
				<td><input class="form-control" type="text" name="obra_trabalhada" value="{{$funcionario[0]->obra_trabalhada}}"  disabled> </td>
			</tr>
			<tr>
				<td>Data Admissão:</td>
				<td><input class="form-control" type="text" name="data_admissao" value="{{$funcionario[0]->data_admissao}}"  disabled> </td>
				<td></td>
				<td>Data Demissão:</td>
				<td><input class="form-control" type="text" name="data_demissao" value="{{$funcionario[0]->data_demissao}}" disabled> </td>
			</tr>
			<tr>
				<td>Entrou com Processo Judicial:</td>
				<td>
					<input type="radio" name="acao_judicial" value="1" <?php echo $funcionario[0]->acao_judicial == 1 ? "checked" : "disabled"; ?>> SIM
					<input type="radio" name="acao_judicial" value="2" <?php echo $funcionario[0]->acao_judicial == 0 ? "checked" : "disabled"; ?>> NÃO
				</td>
				<td></td>

				<td>Testemunhou em Processo Judicial:</td>
				<td>
					<input type="radio" name="testemunha_judicial" value="1" <?php echo $funcionario[0]->testemunha_judicial == 1 ? "checked" : "disabled"; ?>> SIM
					<input type="radio" name="testemunha_judicial" value="2" <?php echo $funcionario[0]->testemunha_judicial == 0 ? "checked" : "disabled"; ?>> NÃO
				</td>
			</tr>
			<tr>
				<td>Observações:</td>
				<td colspan="4"><textarea class="form-control" name="observacoes_contrato"  disabled>{{$funcionario[0]->observacoes_contrato}}</textarea> </td>
			</tr>
		</table><br>

		<table class="table table-hover">		
			<tr>		
				<td colspan="2">ITENS AVALIADOS</td>
				<td colspan="2">PESO</td>
				<td ></td>
			</tr>
			<tr>		
				<td colspan="2">Conhecimentos Praticos</td>
				<td>1</td>
				<td colspan="2">
					<input type="radio" name="conhecimento_pratico" value="1" <?php echo $funcionario[0]->conhecimento_pratico == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="conhecimento_pratico" value="2" <?php echo $funcionario[0]->conhecimento_pratico == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="conhecimento_pratico" value="3" <?php echo $funcionario[0]->conhecimento_pratico == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="conhecimento_pratico" value="4" <?php echo $funcionario[0]->conhecimento_pratico == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="conhecimento_pratico" value="0" <?php echo $funcionario[0]->conhecimento_pratico == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Relacionamento com Superior Imediato</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="relacionamento_superior" value="1" <?php echo $funcionario[0]->relacionamento_superior == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="relacionamento_superior" value="2" <?php echo $funcionario[0]->relacionamento_superior == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="relacionamento_superior" value="3" <?php echo $funcionario[0]->relacionamento_superior == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="relacionamento_superior" value="4" <?php echo $funcionario[0]->relacionamento_superior == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="relacionamento_superior" value="0" <?php echo $funcionario[0]->relacionamento_superior == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Relacionamento com a Equipe</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="relacionamento_equipe" value="1" <?php echo $funcionario[0]->relacionamento_equipe == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="relacionamento_equipe" value="2" <?php echo $funcionario[0]->relacionamento_equipe == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="relacionamento_equipe" value="3" <?php echo $funcionario[0]->relacionamento_equipe == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="relacionamento_equipe" value="4" <?php echo $funcionario[0]->relacionamento_equipe == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="relacionamento_equipe" value="0" <?php echo $funcionario[0]->relacionamento_equipe == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Respeita as normas da Empresa</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="respeita_normas" value="1" <?php echo $funcionario[0]->respeita_normas == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="respeita_normas" value="2" <?php echo $funcionario[0]->respeita_normas == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="respeita_normas" value="3" <?php echo $funcionario[0]->respeita_normas == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="respeita_normas" value="4" <?php echo $funcionario[0]->respeita_normas == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="respeita_normas" value="0" <?php echo $funcionario[0]->respeita_normas == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Assíduo</td>
				<td>3</td>
				<td colspan="4">
					<input type="radio" name="assiduidade" value="1" <?php echo $funcionario[0]->assiduidade == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="assiduidade" value="2" <?php echo $funcionario[0]->assiduidade == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="assiduidade" value="3" <?php echo $funcionario[0]->assiduidade == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="assiduidade" value="4" <?php echo $funcionario[0]->assiduidade == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="assiduidade" value="0" <?php echo $funcionario[0]->assiduidade == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">EPIs usados de forma Correta</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="epis_correto" value="1" <?php echo $funcionario[0]->epis_correto == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="epis_correto" value="2" <?php echo $funcionario[0]->epis_correto == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="epis_correto" value="3" <?php echo $funcionario[0]->epis_correto == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="epis_correto" value="4" <?php echo $funcionario[0]->epis_correto == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="epis_correto" value="0" <?php echo $funcionario[0]->epis_correto == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Cuidadoso com suas Ferramentas</td>
				<td>1</td>
				<td colspan="4">
					<input type="radio" name="cuidado_ferramentas" value="1" <?php echo $funcionario[0]->cuidado_ferramentas == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="cuidado_ferramentas" value="2" <?php echo $funcionario[0]->cuidado_ferramentas == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="cuidado_ferramentas" value="3" <?php echo $funcionario[0]->cuidado_ferramentas == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="cuidado_ferramentas" value="4" <?php echo $funcionario[0]->cuidado_ferramentas == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="cuidado_ferramentas" value="0" <?php echo $funcionario[0]->cuidado_ferramentas == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Dinâmico</td>
				<td>3</td>
				<td colspan="4">
					<input type="radio" name="dinamico" value="1" <?php echo $funcionario[0]->dinamico == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="dinamico" value="2" <?php echo $funcionario[0]->dinamico == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="dinamico" value="3" <?php echo $funcionario[0]->dinamico == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="dinamico" value="4" <?php echo $funcionario[0]->dinamico == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="dinamico" value="0" <?php echo $funcionario[0]->dinamico == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Comportamento dentro da Obra</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="comportamento_obra" value="1" <?php echo $funcionario[0]->comportamento_obra == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="comportamento_obra" value="2" <?php echo $funcionario[0]->comportamento_obra == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="comportamento_obra" value="3" <?php echo $funcionario[0]->comportamento_obra == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="comportamento_obra" value="4" <?php echo $funcionario[0]->comportamento_obra == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="comportamento_obra" value="0" <?php echo $funcionario[0]->comportamento_obra == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>		
				<td colspan="2">Comportamento dentro do Alojamento</td>
				<td>2</td>
				<td colspan="4">
					<input type="radio" name="comportamento_alojamento" value="1" <?php echo $funcionario[0]->comportamento_alojamento == 1 ? "checked" : "disabled"; ?>> 1 - Ruim
					<input type="radio" name="comportamento_alojamento" value="2" <?php echo $funcionario[0]->comportamento_alojamento == 2 ? "checked" : "disabled"; ?>> 2 - Regular
					<input type="radio" name="comportamento_alojamento" value="3" <?php echo $funcionario[0]->comportamento_alojamento == 3 ? "checked" : "disabled"; ?>> 3 - Bom
					<input type="radio" name="comportamento_alojamento" value="4" <?php echo $funcionario[0]->comportamento_alojamento == 4 ? "checked" : "disabled"; ?>> 4 - Otimo
					<input type="radio" name="comportamento_alojamento" value="0" <?php echo $funcionario[0]->comportamento_alojamento == 0 ? "checked" : "disabled"; ?>> Não Aplicavel
				</td>
			</tr>
			<tr>
				<td colspan="2"><label>Resultado: (%)</label> </td>
				<td colspan="2"> <?php echo substr($funcionario[1],0,5) ; ?> %</td>
				<td> <?PHP echo $funcionario[1] >= 70 ? "EFICAZ" : "INEFICAZ" ?></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input class="btn btn-success" type="submit" value="VOLTAR PARA BUSCA DE FUNCIONARIOS"></td>
				<td colspan="2"></td>
			</tr>
		</table>
	</form>
</div>
@stop