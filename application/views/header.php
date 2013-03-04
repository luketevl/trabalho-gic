<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Layout Padrao</title>
	<link rel="stylesheet" type="text/css" href="resources/css/style.css" /> 
<style>
*{
	margin:0px;	
}
	header#cabecalho{
		background-color: red;
		width:100%;
		height:170px;
		border-bottom-width:1.3px;
		border-bottom-style:solid;
	}
	
	header{
	    border-bottom: 1px;
    	border-bottom-style: solid;
	
	}
	section#conteudos{
		width:100%;
		height:300px;
	}

	section{
		width:20%;
		height:300px;
	}
	section#column-left{
		background-color: yellow;
		float:left;
		border-right-width:1px;
		border-right-style:solid;
	}
	section#column-right{
		background-color: pink;
		float:right;
		border-left-width:1px;
		border-left-style:solid;
	}
	
	section#center{
		background-color: green;
		width:59.85%;
		float:left;
	}

	footer{
		background-color: blue;
		width:100%;
		height:200px;
		border-top-width:1px;
		border-top-style:solid;
	}	
	

	
</style>

</head>
<body>
<header id="cabecalho">
	<h1> Comeco</h1>
<nav>
	
</nav>
</header>
<section id="conteudos">
	<section id="column-left" >
		<header>Social</header>
	</section>
	
	<section id="center" >
		<header>Materias</header>
		<article>
			<img src="resources/img/teste.jpg" width="200" alt="Imagem teste" />
			<a href="#" title="link">Veja sobre a coisa do pedaço</a>
		</article>
	
	</section>
	
	<section id="column-right" >
		<header>Videos</header>
	</section>
</section>


<footer>
	<h3>Rodape</h3>
</footer>
</body>
</html>


