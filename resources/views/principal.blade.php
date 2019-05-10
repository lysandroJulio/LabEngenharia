<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
	<title>@yield('tituloPagina')</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<nav class="navbar-header">
			  		<a class="navbar-brand" href="/labengenharia/public/">LA Services</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				</nav>
	    <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="/labengenharia/public/cadastro/funcionario/">Adicionar Funcionario</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/labengenharia/public/busca/funcionarios/"> Pesquisar Funcionario </a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/labengenharia/public/busca/avaliacao/"> Adicionar Avaliação </a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="/labengenharia/public/cadastro/usuario/"> Adicionar Usuario Sistema</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="/labengenharia/public/"> SAIR </a>
				</li>
			</ul>
	    </div>
		</div>
	</nav>
	<div class="container">
		<div id="corpo">
			<div class="principal">
				@yield('corpo')
			</div>
		</div>
	</div>
</body>
</html>