@extends('principal')

@section('tituloPagina')
	Cadastro de Funcionario
@stop

@section('corpo')
<br>
	<form action="/labengenharia/public/cadastro/funcionario/adicionar" method="post">
		<h1>Adicionando um Funcionario</h1>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<table class="table">
			<tr>
				<td>CPF:</td>
				<td><input class="form-control" type="text" name="cpf_funcionario" id="cpf"> </td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="nome_funcionario" id="nome"> </td>
			</tr>
			<tr>
				<td>Telefone Fixo:</td>
				<td><input class="form-control" type="text" name="telefone1" id="telefone1"> </td>
			</tr>
			<tr>
				<td>Telefone Celular:</td>
				<td><input class="form-control" type="text" name="telefone2" id="telefone2"> </td>
			</tr>
			<tr>
				<td>Cargo:</td>
				<td>
					<select class="form-control" name="cod_cargo" id="cod_cargo"> 
					 	@foreach($cargos as $cargo)
						<option value="{{$cargo->cod_cargo}}"> 
							{{$cargo->descricao_cargo}} 
						</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>		
				<td><input class="btn btn-success" type="submit" value="Adicionar" id="btnEnviar"></td>
				<td></td>
			</tr>		
		</table>
	</form>
	<script>
		window.onload = function(){
			document.getElementById("btnEnviar").onclick = validarDados;
		}
		
		function validarDados(){
			var msg = "";
			var texto = document.getElementById("cpf_funcionario").value;
			var n = texto.length;
			if (document.getElementById("cpf").value == ""){
				msg += "CPF;\n";
			}				
			if (document.getElementById("nome_funcionario").value == ""){
				msg += "Nome;\n";
			}
			if (document.getElementById("telefone1").value == ""){
				msg += "Telefone 1;\n";
			}
			if (document.getElementById("telefone2").value == ""){
				msg += "Telefone 2;\n";
			}
			if (n != 11){
				msg += "Numero de Digitos do CPF incorreto;\n";
			}
			if (msg == ""){
				return true;
			}else{
				msg = "Os dados abaixo são obrigatórios: \n" + msg;
				alert(msg);
				return false;
			}				
		}
	</script>

@stop