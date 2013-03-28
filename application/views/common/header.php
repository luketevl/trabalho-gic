<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Layout Padrao</title>
	<link rel="stylesheet" type="text/css" href="../resources/css/style.css" />
	
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  
 	<link href="../resources/icheckmaster/css/demo.css?v=0.7" rel="stylesheet">
  
  	<link href="../resources/icheckmaster/skins/all.css?v=0.7" rel="stylesheet">
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
  	<script>window.jQuery || document.write('<script src="../resources/icheckmaster/js/jquery.js">\x3C/script>');</script>
  
  	<script src="../resources/icheckmaster/js/jquery.icheck.min.js?v=0.7"></script>


</head>
<body>
<header id="cabecalho">
<nav>
	     <div class="demo-list clear">
          <ul>
            <li>
              <input tabindex="21" type="checkbox" id="input-1">
              <label for="input-1">Checkbox, <span>#input-1</span></label>
            </li>
            <li>
              <input tabindex="22" type="checkbox" id="input-2" checked>
              <label for="input-2">Checkbox, <span>#input-2</span></label>
            </li>
          </ul>
          <ul>
            <li>
              <input tabindex="23" type="radio" id="input-3" name="demo-radio">
              <label for="input-3">Radio button, <span>#input-3</span></label>
            </li>
            <li>
              <input tabindex="24" type="radio" id="input-4" name="demo-radio" checked>
              <label for="input-4">Radio button, <span>#input-4</span></label>
            </li>
          </ul>
          <script>
          $(document).ready(function(){
            var callbacks_list = $('.demo-callbacks ul');
            function callback_log(id, type) {
              $('.demo-callbacks ul').prepend('<li><span>#' + id + '</span> is ' + type.toLowerCase() + '</li>');
            };
            $('.demo-list input').bind('is.Created is.Clicked is.Changed is.Checked is.Unchecked is.Disabled is.Enabled is.Destroyed', function(event){
              callback_log(this.id, event.namespace);
            }).iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%'
            });
          });
          </script>
        </div>
</nav>
</header>
<section id="content">
	<section id="column-left" >
		<header>Materias</header>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
			<article>
				<a href="#" title="link" >Quaaase! Rachel vai a casa de Livia de surpresa e Wanda se esconde
					<hr class="clear" />	
				<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
			</article>
	</section>
	<section id="column-right" >
		<header>Videos</header>
		<article>
			<a href="#" title="link">Policial e suspenso por foto comprometedora no Facebook e culpa hacker
					<hr class="clear" />
			<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a> 
		</article>
		<article>
			<a href="#" title="link">Policial e suspenso por foto comprometedora no Facebook e culpa hacker
					<hr class="clear" />
			<img src="../resources/img/teste.jpg" width="200" alt="Imagem teste" /></a>
		</article>
	</section>
	
</section>


<footer>
	<p class="copri">
		Desenvolvidor por luketevl: Todos os direitos reservados.
	</p>
</footer>

</body>
</html>


