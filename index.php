<?php
include_once "./conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>ASSOCIACAO FILANTROPICA ARCA DAS CRIANCAS</title>
</head>

<body>
	<!-- Container (cabeçalho) -->
	<header class="w3-display-container w3-content w3-center cabecalho">
		<img src="./img/cabecalho_arcadascriancas.jpg" alt="Imagem de 4 crianças" class=" w3-image " class="imagem-cabecalho">
		<div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
			<h1 class="w3-hide-medium w3-hide-small w3-xxx-large">ARCA DAS CRIANÇAS</h1>
			<h5 class="w3-hide-large largura-espaco-logo">ARCA DAS CRIANÇAS</h5>
			<h3 class="w3-hide-medium w3-hide-small">ASSOCIAÇÃO FILANTRÓPICA</h3>
		</div>

		<!-- Container (telas grandes) -->
		<div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small estilo-bottom-menu">
			<a href="#inicio" class="w3-bar-item w3-button">Inicio</a>
			<a href="#sobre" class="w3-bar-item w3-button">Sobre</a>
			<a href="#portfolio" class="w3-bar-item w3-button">Portfólio</a>
			<a href="#contato" class="w3-bar-item w3-button">Contato</a>
		</div>
	</header>

	<!-- container (telas pequenas) -->
	<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
		<div class="w3-bar w3-light-grey">
			<a href="#" class="w3-bar-item w3-button">Inicio</a>
			<a href="#sobre" class="w3-bar-item w3-button">Sobre</a>
			<a href="#portfolio" class="w3-bar-item w3-button">Portfólio</a>
			<a href="#contato" class="w3-bar-item w3-button">Contato</a>
		</div>
	</div>
	</header>

	<!-- Container (sobre) -->
	<div class="w3-content w3-container w3-padding-64" id="#sobre">
		<h3 class="w3-center">QUEM SOMOS</h3>
		<p class="w3-center"><em>Amamos o que fazemos por uma sociedade mais justa</em></p>
		<p>
			Derrubamos muros, construímos pontes, ampliando horizontes, acolhendo, 
			educando e protegendo crianças e adolescentes em situação de vulverabilidade.
			O coração do Grajaú, esse é o chão que a gente pisa e é por essas famílias
			que aqui estamos.
			Juntos, buscamos dia a dia o empoderamento, a autoestima e autonomia, 
			através de atividades socioeducativas e visando a construção de um projeto de vida.
		</p>

		<!-- container ( imagem quem somos) -->
		<div class="w3-row">
			<div class="w3-col m6 w3-center w3-padding-large">
				<p><b><i class="fa fa-user w3-margin-right"></i>ARCA DAS CRIANÇAS</b></p><br>
				<img src="./img/quem-somos.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
			</div>

			<!-- Conteiner (oculto para dispositivos de telas pequenas) -->
			<div class="w3-col m6 w3-hide-small w3-padding-large">
				<p>
				<strong>Nosso lema</strong> A Arca como um caminho para um futuro melhor.<br>
				<strong> Nossa missão</strong> Contribuir para a construção de um 
				futuro melhor para as comunidades de  moradores, oferecendo 
				oportunidades de acolhimento e educação,  promovendo o empoderamento 
				deles(as) para o rompimento do ciclo de pobreza e vulnerabilidade 
				em que estão inseridos. Acreditamos que a educação é o caminho e
				com ela todo indivíduo, independente da sua situação, pode mostrar 
				o seu potencial com autonomia e autoconfiança.<br>
				<strong>Nossos valores</strong> paz, respeito, proteção, igualdade e progresso
                </p>
				<p>
				Visite-nos e descubra mais sobre nossos trabalhos e como temos gerado 
				impactos sociais positivos junto a nossas comunidade. Conheça 
				nossa história que ao longo de mais de mais de uma década, estamos 
				juntos criando novos rumos para nossas comunidades. 
				Envolva-se e ajude em nossos projetos, seja por nos apoiar em nossas 
				atividades sociais ou mesmo doando alimentos, equipamentos para a 
				área de educação e esportes.
				</p>
			</div>
		</div>

	</div>
	<!--  -->
	<div class="w3-row w3-center w3-dark-grey w3-padding-16">
		<div class="w3-quarter w3-section">
			<span class="w3-xlarge">+400</span><br>
			Crianças Acolhidas
		</div>
		<div class="w3-quarter w3-section">
			<span class="w3-xlarge">+290</span><br>
			Familías Atendidas
		</div>
		<div class="w3-quarter w3-section">
			<span class="w3-xlarge">+18</span><br>
			Parcerias
		</div>
		<div class="w3-quarter w3-section">
			<span class="w3-xlarge">+150</span><br>
			Doações
		</div>
	</div>

	<!-- Container Parallax (texto do portfolio) -->
	<div class="bgimg-1 w3-display-container w3-opacity-min">
		<div class="w3-display-middle">
			<span class="w3-xxlarge w3-text-white w3-wide">PORTFÓLIO</span>
		</div>
	</div>

	<!-- Container (Portfólio) -->
	<div class="w3-content w3-container w3-padding-64" id="#portfolio">
		<h3 class="w3-center">NOSSAS REFERÊNCIAS</h3>
		<p class="w3-center">
			<em> Aqui estão alguns de nossos trabalhos junto a nossa comunidade.<br>
				Clique nas imagens para ampliá-las.</em>
		</p><br>

		<!-- Container (Grid de imagens com 4 colunas para tablets, laptops e desktops) -->
		<div class="w3-row-padding w3-center">
			<div class="w3-col m3">
				<img src="./img/exposicao-carrinhos-Associacao_Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="#">
			</div>

			<div class="w3-col m3">
				<img src="./img/exposicao-brinquedos-maninas-Associacao_Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>

			<div class="w3-col m3">
				<img src="./img/brinquedoteca_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>

			<div class="w3-col m3">
				<img src="./img/sala-de-aula_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>
		</div>

		<div class="w3-row-padding w3-center w3-section">
			<div class="w3-col m3">
				<img src="./img/sala-musica_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>

			<div class="w3-col m3">
				<img src="./img/brinquedos-de-moveis_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>

			<div class="w3-col m3">
				<img src="./img/trofeus_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>

			<div class="w3-col m3">
				<img src="./img/sala-de-aula-sendo-organizada_Associacao-Filantropica-Arca-Das-Criancas .jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="">
			</div>
			<button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">VER MAIS</button>
		</div>
	</div>

	<!-- Container (Modelo de imagens em tamanho real ao clicar)-->
	<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
		<span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
		<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
			<img id="img01" class="w3-image">
			<p id="caption" class="w3-opacity w3-large"></p>
		</div>
	</div>

	<!-- Container Parallax (texto do contato) -->
	<div class="bgimg-2 w3-display-container w3-opacity-min">
		<div class="w3-display-middle">
			<span class="w3-xxlarge w3-text-white w3-wide">FALE CONOSCO</span>
		</div>
	</div>

	<!-- Container (Contato) -->
	<div class="w3-content w3-container w3-padding-64" id="contato">
		<h3 class="w3-center">ONDE ESTAMOS</h3>
		<p class="w3-center"><em>Ficariamos felizes em receber seu feedback!</em></p>

		<div class="w3-row w3-padding-32 w3-section">
			<div class="w3-col m4 w3-container">
<!--
				<img src="./img/Map- Associacao-Filantropica-Arca-Das-Criancas .jpg" class="w3-image w3-round" style="width:100%">
-->
            <div id="map" style="width:300px;height:300px;background:green"></div>

			</div>
			<div class="w3-col m8 w3-panel">
				<div class="w3-large w3-margin-bottom">
					<i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> R. Miguel Salcedo, 1700 - São Paulo - SP<br>
					<i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telefone: (11) 5932-8538<br>
					<i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
				</div>
				<p>Passe por aqui para tomar uma xícara de <i class="fa fa-coffee"></i>, ou deixe-me um recado:</p>

				<?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados['AddMsgCont'])) {
        //var_dump($dados);

        $query_contato = "INSERT INTO contatos (nome, email, assunto, conteudo) VALUES (:nome, :email, :assunto, :conteudo)";
        $add_contato = $conn->prepare($query_contato);
        $add_contato->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $add_contato->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $add_contato->bindParam(':assunto', $dados['assunto'], PDO::PARAM_STR);
        $add_contato->bindParam(':conteudo', $dados['conteudo'], PDO::PARAM_STR);

        $add_contato->execute();

        if($add_contato->rowCount()){
            echo "<p style='color: green;'>Mensagem enviada com sucesso!</p>";
        }else{
            echo "<p style='color: #f00;'>Erro: Mensagem não enviada com sucesso!</p>";
        }

    }
    ?>
				
			<form method="POST" action="">
				<input class="w3-input w3-border" type="text" name="nome" placeholder="Nome completo" required>
				<input class="w3-input w3-section w3-border" type="email" name="email" placeholder="Seu melhor e-mail" required>
				<input class="w3-input w3-section w3-border" type="text" name="assunto" placeholder="Assunto da mensagem" required>
				<textarea class="w3-input w3-section w3-border" name="conteudo" rows="3" cols="30" placeholder="Conteúdo da mensagem" required></textarea>
				<input class="w3-button w3-block w3-section w3-dark-grey" type="submit" name="AddMsgCont" value="Enviar">
				</form>
			</div>
		</div>
	</div>

	<!-- Container (Rodapé) -->
	<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
		<a href="#inicio" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Topo</a>
		<div class="w3-xlarge w3-section">
			<i class="fa fa-facebook-official w3-hover-opacity"></i>
			<i class="fa fa-instagram w3-hover-opacity"></i>
			<i class="fa fa-snapchat w3-hover-opacity"></i>
			<i class="fa fa-pinterest-p w3-hover-opacity"></i>
			<i class="fa fa-twitter w3-hover-opacity"></i>
			<i class="fa fa-linkedin w3-hover-opacity"></i>
		</div>
		<p>
			Desenvolvido por <a href="#" title="#" target="_blank" class="w3-hover-text-green">GPICIIT-005 </a> <title> GPIntegrador em Computação II-Turma 005 </title> <br>
			&copy; ARCA DAS CRIANÇAS - Todos os Direitos Reservados.
		</p>
	</footer>

	<script src="./js/script.js" charset="utf-8"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD61o9WS-jBZBbsyrGtJqxXuvmTrj5TOaQ&callback=Map123"></script>
</body>

</html>
