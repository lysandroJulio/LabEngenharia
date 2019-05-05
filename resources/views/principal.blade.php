<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	<title>@yield('tituloPagina')</title>
</head>
<body>
	<div class="navbar navbar-expand-lg navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="">LA Services</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="/labengenharia/public/cadastro/funcionario/"> Adicionar Funcionario </a></li>
					<li><a href="/labengenharia/public/busca/funcionarios/"> Pesquisar Funcionario </a></li>
					<li><a href="/labengenharia/public/busca/avaliacao/"> Adicionar Avaliação </a></li>
					<li><a href="/labengenharia/public/cadastro/usuario/"> Adicionar Usuario Sistema</a></li>
					<li><a href=""> SAIR </a></li>
				</ul>
			</div>
		</div>		
	</div>

	<div class="container">
		<div id="corpo">
			<div class="principal">
				@yield('corpo')
			</div>
		</div>
	</div>

</body>
</html>