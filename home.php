<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>HOME</title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
    	<script src="js/jquery-3.3.1.min.js"></script>
    	<script src="js/popper.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<style>
			body{
				background-color: #FFFFE0;
			}
		</style>
	</head>
	<body>
	
	<!-- Barra de Navegação -->
		<?php
			if(empty($_SESSION)){
				include ('barra_navegacao1.inc');
			}else{
				if($_SESSION["identificador_usu"] == 0){
					include ('barra_navegacao2.inc');
				}else{
					include ('barra_navegacao3.inc');
				}
			}
		?>
		
	<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="img/capa1.png" alt="First slide">
          </div>
          <div class="carousel-item active">
            <img class="second-slide" src="img/capa1.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/capa2.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
      </div><br>

      <div class="container marketing">

        <div class="row" align="center">
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/bola1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Ame</h2>
            <p align="justify">Amar um animal é ver-se refletido no seu olhar que espera tudo de nós, que convida a um carinho, que arranca um sorriso e emoções nobres. A única coisa que ele pede em troca é amor.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/bola2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Preserve</h2>
            <p align="justify">Dê valor aos seus animaizinhos, porque somos tudo o que eles têm. Em uma vida podemos amar vários deles, mas para eles, nós somos os únicos.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/bola3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Cuide</h2>
            <p align="justify">Ter um animal em sua vida não faz de você uma pessoa melhor, mas sim cuidar dele e respeitá-lo como merece.</p>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Porque a Adoção <span class="text-muted">é, importante?!</span></h2>
            <p class="lead" align="justify"><i>"Adotar um animal é uma grande responsabilidade, e não é só porque você precisará cuidar dele em casa. A adoção é capaz de salvar a vida de um bichinho que poderia estar nas ruas, abandonado, morrendo de fome e possivelmente sofrendo de maus tratos. A maioria das ONGs e clínicas veterinárias não podem sustentar um animal por muito tempo, não tendo condições de manter a quantidade de cães e gatos desabrigados que frequentemente recebem. Além de levar um novo companheiro para a casa, você está salvando a vida de um grande amigo e dando a ele a oportunidade de receber amor em um lar seguro." <br><br> - Referência (https://www.casapraticaqualita.com.br/noticia/6-motivos-para-adotar-um-animal-de-estimacao_a1323/1)</i></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="img/quadro1.png" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Também Não podemos <span class="text-muted">Esquecer!</span></h2>
            <p class="lead" align="justify"><i>"Adotar é um ato de amor incondicional, praticado apenas por aqueles que têm a coragem de dar um novo passo e um rumo na vida e família. Além de ser maravilhoso. Se você puder ou tiver a necessidade, adote!"
				<br><br>"Ter um animalzinho envolve idas regulares ao veterinário para checar se está tudo, vacinar e etc. Porém, esteja disposto a surpresas! Assim como nós, os bichinhos também adoecem e precisam de cuidados especiais! Adotar um bichinho é um gesto de amor e o amor envolve responsabilidade e cuidado!"
				<br><br> - Referência (https://www.mensagenscomamor.com/)
			</i></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/quadro2.png" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Obrigado (a) pela Atenção!! <span class="text-muted">Prossiga para o Login ou Cadastro e se quiser saber mais, consulte nossas paginas informativas!</span></h2>
            <p class="lead" align="justify"><i>No topo da pagina estão descritos tudo o que você vai precisar: HOME (Página Atual), Sobre Nós (informações dos Desenvolvedores), Sobre o Site (Página caso queira saber um pouco mais sobre a criação do site), Instruções (Caso não saiba por onde começar), Adoções de Sucesso (Para ver animais adotados com sucesso na plataforna) e claro, os botões de cadastro e login.
			</i></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="img/quadro3.gif" data-holder-rendered="true" style="width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">
      </div>
    </main>
		<?php
			include ('rodape.inc');
		?>
	</body>
</html>