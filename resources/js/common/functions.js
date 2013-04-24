
$(document).ready(function() {
	// Pega valor dos acessos
	createLoad();
	$("#form").validate();
	$('.skin-line input').each(function() {
		var self = $(this), label = self.next(), label_text = label.text();
		label.remove();
		self.iCheck({
			checkboxClass : 'icheck_line-blue',
			radioClass : 'icheck_line-blue',
			insert : '<div class="icheck_line-icon"></div>' + label_text
		});
	});
	is_checked($('input:hidden[name=hd_acesso]').val());
	is_checked($('input:hidden[name=hd_funcoes]').val());
	disabled_all();
	createNotificationUser('https://twimg0-a.akamaihd.net/profile_images/770845756/45_normal.jpg','Criei um novo POST chamado MEU TESTE, tem como olhar? Obrigado');
	function is_checked(hd_opcoes) {
//		hd_opcoes = (hd_opcoes == undefined) ? "" : hd_opcoes;
		if(hd_opcoes !=undefined){ 
			var qtd = hd_opcoes.length;
			for (i = 0; i < qtd; i++) {
				var tmp = hd_opcoes.substring(i, i + 1);
				$('input:checkbox[value=' + tmp + ']').iCheck('check');
			}
		}
	}

	function disabled_all() {
		if ($('input:hidden[name=hd_editavel]').val() == 0) {
			$('input').each(function() {
				$(this).iCheck('disable');
			});
		}
	}
	
	function createLoad(){
		$('<div id="canvasloader-container" class="centro"></div>').insertBefore('body');
		// Cria load na página
		var cl = new CanvasLoader('canvasloader-container');
		cl.setDiameter(45); // default is 40
		cl.show(); // Hidden by default

		// This bit is only for positioning - not necessary
		var loaderObj = document.getElementById("canvasLoader");
		loaderObj.style.position = "absolute";
		loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
		loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
		$('#canvasLoader').removeAttr('style');
	}
	
	function createNotificationUser(img,message){
		$(document).ready(function(){
			$.createNotification({
				content: '<img src="'+img+'">'+ message+''
			});
			});
	}
	
});
$(window).load(function(){
		$('#canvasloader-container').addClass("centro hide");
});


