<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Alug Cadastre-se </title>
		<meta charset="utf-8">
		<meta name="description" content="Cadastre-se no site para começar a usa-lo "> <!-- lembrar de mehorar --> 
			<meta name="keywords" content="Aluguel de casaa, Alug, Aluguel, Alugue, Rio Tinto">
			<meta name="robots" content="index, fallow">
			<meta name="author" content="Lucas Aragão">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../libraries/estilo.css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico|Roboto+Slab" rel="stylesheet">
			
			<script src="../libraries/jquery-3.3.1.js"></script> 
			

			<script src="../libraries/jquery.cycle.lite.js"></script>

			<script src="../libraries/javascript.js"></script>
	</head>
	


	<body>

		<header>
			<nav>
				<ul>
					 <li><a href="index">Home</a></li>
					 <li><a href="sobrenos">Sobre nós</a></li>
					 <li><a href="anuncios">Anúncios</a></li>
					 <li><a href="cadastrese">Cadastre-se</a></li>
					 <li><a href="contato">Contato</a></li>
				</ul>
			</nav>	

			<div class="ind-botao"> 
				<img src="../imagens/botao.png" alt="Botão mobile" title="Botão mobile">
			</div>
			
			<div class="ind-logo"> <!-- criar logo menor para smart -->
				<picture> <!-- conceito de responsividade pagina 255 --> 
					<source media = "(max width 480px)" srcset="imagens/logo.png">
					<source media = "(min width 481px) and (max width 768px)" srcset="imagens/logo.png">
					<source media = "(min width 769px)" srcset="imagens/logo.png">
					<img src="../imagens/logo.png" alt="Logo Marca da Empresa" title="Logo Alug">  <!-- para navegadores android que n reconhcem picture --> 	
				</picture>
			</div>

		</header>



		<main>
			<div class="ind-banerCadastro"> <!-- criar logo menor para smart -->
				<picture> <!-- conceito de responsividade pagina 255 --> 
					<source media = "(max width 480px)" srcset="imagens/casabaner.jpg">
					<source media = "(min width 481px) and (max width 768px)" srcset="imagens/casabaner.jpg">
					<source media = "(min width 769px)" srcset="imagens/casabaner.jpg">
					<!--<img src="../imagens/casabaner.jpg" alt="Logo Marca da Empresa" title="Logo Alug"> --> <!-- para navegadores android que n reconhcem picture --> 	
				</picture>
			</div>

			<div class="Texto">
				<p>Cadastre-se para obter maiores informações</p>

				<form name="FormularioCadastro" id="FormularioCadastro" method="post" action="controller_cadastro.php">
					<div class="Formulario">
						<label for="nome">Nome: </label><br>
						<input type="text" id="nome" name="nome">
					</div>

					<div class="Formulario">
						<label for="email">Email: </label><br>
						<input type="email" id="email" name="email">
					</div>

					<div class="Formulario">
						<label for="tel">Telefone: </label><br>
						<input type="tel" id="tel" name="tel">
					</div>

					<div class="Formulario">
						<label for="idade">Idade: </label><br>
						<input type="text" id="idade" name="idade">
					</div>

					<div class="Formulario">
						<input type="submit" id="botao" name="botao" value="Cadastrar">
					</div>
				</form>

			</div>


		</main>



		<footer>

			<div class="rodape">
				
				<div class="rodape-imagem">
					
					<picture> <!-- conceito de responsividade pagina 255 --> 
					<source media = "(max width 480px)" srcset="imagens/logo-pequena.png">
					<source media = "(min width 481px) and (max width 768px)" srcset="imagens/logo-pequena.png">
					<source media = "(min width 769px)" srcset="imagens/logo-pequena.png">
					<img src="../imagens/logo-pequena.png ?" alt="Logo Marca da Empresa" title="Logo Alug">  <!-- para navegadores android que n reconhcem picture --> 	
				</picture>

				</div>

				<div class="rodape-texto">
					Rua da Aurora, 942 - Bairro Centro <br>
					Rio Tinto  Paraíba <br>
					Entre em contato (83)9.9999-9999 <br> 
				</div>
			</div>
			
		</footer>		
	

	</body>



</html>