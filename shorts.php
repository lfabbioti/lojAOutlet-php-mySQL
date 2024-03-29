<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Outlet Multimarcas</title>
    <link rel="stylesheet" href="css/estilo.css">
	<!-- cria compatibilidade entre html5 e navegadores antigos -->
	<script scr="js/modernizr.js" "></script>
	<!-- modifica a escala do dispositivo-->
	<meta name="viewport" content="initial-scale-1">
	<link rel="icon" type="image/png" href="img/favicon.png">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    	<div id="total">
    		<header id="topo">
				<div id="logo">
					<img src="img/logo.png" alt="Logotipo">
				</div>
			<div id="divBusca">
  				<!-- <input type="text" id="txtBusca" placeholder="Buscar produtos..."/>
                    <input type="submit" name="buscar" value="Buscar">-->
			</div>
			<nav id="menu">
				<a href="index.php">INÍCIO</a>
				<a href="camisas.php">CAMISAS</a>
				<a href="camisetas.php">CAMISETAS</a>
				<a href="bermudas.php">BERMUDAS</a>
				<a href="calca.php">CALÇA</a>	
				<a href="shorts.php">SHORTS</a>
				<a href="cadastrar.php">CADASTRAR</a>		

			</nav>
			</header>
					<section>
			<div class="camisas">
				<h1 class="fonte"></h1>		
				<figure class="camisa1">
					<a href="shortcasino.php"><img src="img/shorts/short1.jpg"></a>
						
				</figure>
				<figure class="camisa2">
					<a href="shortnaipes.php"><img src="img/shorts/short2.jpg"></a>

				</figure>
				<figure class="camisa1">
					<a href="shortpalm.php"><img src="img/shorts/short3.jpg"></a>
				</figure>
				<figure class="camisa2">
					<a href="shortguitars.php"><img src="img/shorts/short4.jpg"></a>
				</figure>
				<figure class="camisa1">
					<a href="shortinstruments.php"><img src="img/shorts/short5.jpg"></a>
				</figure>
				<figure class="camisa2">
					<a href="shortinstruments1.php"><img src="img/shorts/short6.jpg"></a>
				</figure>
			</div>
			</section>
			<div>
				<figure class="fpaypal">
					<img src="img/paypalboleto/paypal.jpg">
					<img src="img/paypalboleto/boletobancario.jpg">
				</figure>
			</div>
			<aside>
			<i>
				  <p>The Outlet | CNPJ: 12.345.678/9101-12 • Av. Washington Luís, 541, zona 04, Caxias-RJ
			  www.theoutlet.com • sac@theoutlet.com.br • Segunda a Sexta 8h00 às 12h e das 13h às 17h30h</p>
			</i>
			</aside>

		
		<footer id="rodape">
			<b>Todos os direitos reservados © 2019 The Outlet</b>
		</footer>
  </body>
</html>
 <style>
                        body{


}
div#total{
	width: 95%;
	max-width: 980px;
	height: auto; /*altura*/
	margin: auto; /*centraliza a divisão na tela*/
}
header#topo{
	width: 100%;
	height: auto;
	float: left;
	background-color: #fff;
}
div#logo{
	width: 350px;
	margin: auto;
	
}
nav#menu{
	width: 100%;
	height: 40px;
	background-color: black;
	float: left;
	text-align: center;
	margin-bottom: 2px;
	border-radius: 5px;
}
nav#menu a {
	color: white;
	font-size: 14px;
	font-family: verdana;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	margin: 0 25px;
	line-height: 40px; /*Centraliza a linha de cima para baixo*/
}
nav#menu a:hover{
	text-decoration: underline;
}
div#banner{
	width: 100%;
	height: auto;
	float: left;
}
div#banner img{
	width: 100% /*100% do banner*/
}
h1#titulo{
	font-size: 16px;
	font-family: verdana;
	text-align: center;
	margin: 15px auto;
	color: black;
}
article#conteudo{
	width: 100%;
	height: 90%;
	float: right;
	font-family: verdana;
	font-size: 20px;
	text-align: center;

}
aside#coluna{
	width: 35%;
	float:right;
	font-family: verdana;
}
footer#rodape{
	width: 100%;
	float: left;
	background-color: black;
	text-align: center;
	line-height: 25px;
	font-size: 12px;
	color: white;
	margin-top: 30px;
	font-family: verdana;

}
div#anunciotablet{
	width: 100%;
	float: right;	
	background-color: #B7AFAF;
	text-align: center;
	color: black;
	padding: 5px 0;
	display: none;
}
/*MEDIA QUERY - CSS3 - Resolução para Tablets*/
@media screen and (min-width: 668px) and (max-width: 768px){
	div#anunciotablet{
		display: block;
	}
}
@media screen and (max-width: 600px){
	/*Iphone5 na horizontal*/
	nav#menu a{
		margin: 0 10px;
	}
}
@media screen and (max-width: 495px){
	nav#menu{
		height: auto;
	}
	nav#menu a{
		display: block;
		border-bottom: 1px solid #CCC;
	}
	nav#menu a:last-child{
		border: none;
	}
	div#logo, div#logo img{
		width: 150px;
		height: auto;
	}
}	
@media screen and (max-width: 375px){
	/*até o iphone 6*/
	article#conteudo, aside#coluna{
		width: 100%;
	}
	
	div#banner{
		display: none;
	}
}
section#carrosel{
	text-align: center;
	float: right;
}
section#principal{
	text-align: center;
	
}
div#reserva{
	text-align: center;
	font-family: verdana;
}
.servicos{
	margin: 0 auto;
	
	width: 100%


}
.fonte{
	font-size: 30px;
	color: #4B610B;
}
.figuras{
	display: inline-block;
	margin: 5px;
	
	background-color: #fff;
	opacity: 1;
}
.fig1{
	display: inline-block;
}
.fig2{
	display: inline-block;
}
.fig3{		
	display: inline-block;
	margin: 10px;
}
.fig4{
	display: inline-block;
	font-size: 15px;
	margin:10px;
	
}
.fig5{
	display: inline-block;
	font-size: 15px;
	margin: 10px;
}
.fig6{
	display: inline-block;
	font-size: 15px;
}
.fig7{
	display: inline-block;
	font-size: 15px;
}
div#fonte2{
	font-family: verdana;
	color: #4B610B;
	font-size: 1px;
}
.fonte2{
	font-size: 30px;
}
fieldset{
	width: 80%;
	margin: 0 auto;
}
.grupo{
	margin: 15px;
}
.grupo label{
	vertical-align: top;
	display: inline-block;
	text-align: right;
	width: 25%;
	text-transform: inline;

} 
.controle{
	display: inline-block;
	text-align: left;
	width: 60%
}
.controle label{ 
	text-align: left;
 }
 .btn{
 	border: 1px solid #4B610B;
 	background-color: #4B610B;
 	color: #fff;
 	border-radius: 5px;
 	padding: 10px;
 	min-width: 100px;
 }
 .btn:hover{
 	background-color: #4B610B;
 	color: #fff;
 	border: 1px solid #00f;
 }
 .texto-titulo-sobre{
 	text-align: center;
 	color: #4B610B;
 	font-size: 25px;
 }
 .texto-sobre-nos{
 	font-size: 16px;
	font-family: verdana;
	text-align: center;
	margin: 15px auto;
	color: #000;
}
.oni{
	margin:2px auto;
	width: 300px
}
.loguin{
	color: #4B610B;
	text-align: center;
	font-size: 25px;
}
div#acomodacoes{
	text-align: center;
	display: inline;
	width: 100%
}
.formato{
	color: #4B610B;
	font-size: 18px;
	width: 100%;
	margin:  0 auto;
	padding: auto60
}
h5{
	font-size: 15px;
	font-family: verdana;
	color: black;
}
.grupo1{
	
	text-align: center;
	width: 100%;
	height: auto;
	margin: 15px auto;
	padding: 0.1px;
}
.form{
	text-align: center;
	color: #4B610B;
	font-family: verdana;
	font-size: 15px;
}
.mapa{
	margin: 4px 360px;
	width: 40%

}

div#dest{
	width: 100%;
	border-top: solid 1px #ccc;
	border-bottom: solid 1px #ccc;
	text-align: center;	
	padding: 5px;
	margin: 4px;
	float: right;
	

	
	font-family: verdana;

}
.fpaypal{
	border-top: solid 1px #ccc;
	border-bottom: solid 1px #ccc;
	text-align: center;	
	padding: 10px 30px;
	margin: 50px;
}
.camisas{
	margin: 35px 35px;
	width: 100%;
	display: inline-block;
	padding: 1px;
}
.camisastst{
	margin: 10px 0px;
	width: 170%;
	display: inline-block;
	
}
.camisetas{
	margin: 35px 35px;
	width: 100%;
	display: inline-block;
	padding: auto;
}
.camisa1{
	display: inline-block;

}
.camisa2{
	display: inline-block;
}
.camisa3{
	display: inline-block;
}
.camisa4{
	display: inline-block;
	width: 30%;
}
#divBusca{
  float: right;
  margin: 3px;
}

element.style {
}
#body-login .box-authentication h3 {
    color: #000;
}
.box-authentication h3 {
    padding-top: 23px;
    padding-bottom: 23px;
}
.box-authentication h3 {
    font-family: 'Museo500', sans-serif;
    font-size: 18px;
    color: #1F1F1F;
    padding: 30px;
    border: 1px solid #C8C8C8;
    background: #FBFBFB;
}
.box-authentication>h3 {
}
h3 {
    font-size: 18px;
}
h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.tabmedidas{
	width: 100%;
}
.tst{
	width: 125%;
	text-align: center;
	font-family: verdana;
	padding: 10px;
	
}
.camisascompra{
	}
.tst{
	margin: 35px 35px;
	width: 100%;
	display: inline-block;
	padding: 1px;
}
.tst2{
	display: inline-block;
}
.asd{
	text-align: left;
}
.botao{
	text-align: center;
	

}

                    </style>