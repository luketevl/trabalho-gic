
$(document).ready(function() {
	// Pega valor dos acessos
	createLoad();
	 var id_perf=0;
	$('.tooltip').tooltipster();
	$("#form").validate();
	$("#tagsinput").tagsInput();
	disabled_all();
	hide_button($('[name="hd_status"]').val(),id_perf);
	$('table tbody tr:odd').addClass('tbImpar');
	$('table tbody tr:even').addClass('tbPar');

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
	$('a[name="fb_login"]').click(function(){
		createLoad();
	});
	createNotificationUser('https://twimg0-a.akamaihd.net/profile_images/770845756/45_normal.jpg','Criei um novo POST chamado MEU TESTE, tem como olhar? Obrigado');
	$(':button').click(function(ev){
		ev.preventDefault();
		var temp = $(this).attr('name');
		if(temp == 'aprovar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/aprovar');
		}
		else if(temp == 'rejeitar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/rejeitar');
			}
		else if(temp == 'publicar'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/publicar');
			}
		else if(temp == 'remover'){
			$('form').attr('action','http://localhost/portal-gic/index.php/intranet/posts_cadastro/deletar');
			}
		if(temp != 'adicionar'){
			$('form').submit();	
		}
		});
	
	
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
		if (($('input:hidden[name=hd_editavel]').val() == 0 || $('[name="hd_id"]').val() > 0) && $('[name="hd_status"]').val() != 'N') {
			$('input:text').each(function() {
				$(this).attr('disabled','disabled');
			});
			$('textarea').each(function() {
				$(this).attr('readonly','readonly');
			});
			console.log($('div span a'));
			$('#tagsinput_addTag').remove();
			$('div span a').each(function (){
				$(this).remove();
			});
		}
	}
	
	function hide_button(status,id_perf){
		$('[name="publicar"]').removeAttr('disabled');
		$('[name="aprovar"]').removeAttr('disabled');
		$('[name="rejeitar"]').removeAttr('disabled');
		$('[name="editar"]').removeAttr('disabled');
		$('[name="remover"]').removeAttr('disabled');

		$('[name="adicionar"]').addClass('tooltip btn btn-large btn-block btn-primary');
		$('[name="publicar"]').addClass('tooltip btn btn-large btn-block btn-primary');
		$('[name="aprovar"]').addClass('tooltip btn btn-large btn-block btn-primary');
		$('[name="rejeitar"]').addClass('tooltip btn btn-large btn-block btn-primary');
		$('[name="editar"]').addClass('tooltip btn btn-large btn-block btn-primary');
		$('[name="remover"]').addClass('tooltip btn btn-large btn-block btn-primary');

		if(status == ""){
			$('[name="publicar"]').attr('disabled','disabled');
			$('[name="publicar"]').removeClass('tooltip btn-primary');
			$('[name="publicar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="aprovar"]').attr('disabled','disabled');
			$('[name="aprovar"]').removeClass('tooltip btn-primary');
			$('[name="aprovar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="rejeitar"]').attr('disabled','disabled');
			$('[name="rejeitar"]').removeClass('tooltip btn-primary');
			$('[name="rejeitar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="remover"]').attr('disabled','disabled');
			$('[name="remover"]').removeClass('tooltip btn-primary');
			$('[name="remover"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="editar"]').attr('disabled','disabled');
			$('[name="editar"]').removeClass('tooltip btn-primary');
			$('[name="editar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="remover"]').attr('disabled','disabled');
			$('[name="remover"]').removeClass('tooltip btn-primary');
			$('[name="remover"]').addClass('tooltip btn btn-large btn-block disabled');
		}
		
		else if(status == 'N'){
			$('[name="publicar"]').attr('disabled','disabled');
			$('[name="publicar"]').removeClass('tooltip btn-primary');
			$('[name="publicar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			
//				$('[name="enviar"]').attr('disabled','disabled');
//				$('[name="enviar"]').removeClass('tooltip btn-primary');
//				$('[name="enviar"]').addClass('tooltip btn btn-large btn-block disabled');
		}			
		else if(status == 'A'){
			$('[name="enviar"]').attr('disabled','disabled');
			$('[name="enviar"]').removeClass('tooltip btn-primary');
			$('[name="enviar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="aprovar"]').attr('disabled','disabled');
			$('[name="aprovar"]').removeClass('tooltip btn-primary');
			$('[name="aprovar"]').addClass('tooltip btn btn-large btn-block disabled');
			if(id_perf!=1){
				$('[name="remover"]').attr('disabled','disabled');
				$('[name="remover"]').removeClass('tooltip btn-primary');
				$('[name="remover"]').addClass('tooltip btn btn-large btn-block disabled');
				
				$('[name="editar"]').attr('disabled','disabled');
				$('[name="editar"]').removeClass('tooltip btn-primary');
				$('[name="editar"]').addClass('tooltip btn btn-large btn-block disabled');
				
				
			}
		}
		else if(status == 'P'){
			$('[name="enviar"]').attr('disabled','disabled');
			$('[name="enviar"]').removeClass('tooltip btn-primary');
			$('[name="enviar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="publicar"]').attr('disabled','disabled');
			$('[name="publicar"]').removeClass('tooltip btn-primary');
			$('[name="publicar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="aprovar"]').attr('disabled','disabled');
			$('[name="aprovar"]').removeClass('tooltip btn-primary');
			$('[name="aprovar"]').addClass('tooltip btn btn-large btn-block disabled');
			
			$('[name="rejeitar"]').attr('disabled','disabled');
			$('[name="rejeitar"]').removeClass('tooltip btn-primary');
			$('[name="rejeitar"]').addClass('tooltip btn btn-large btn-block disabled');
			if(id_perf!=1){
				$('[name="remover"]').attr('disabled','disabled');
				$('[name="remover"]').removeClass('tooltip btn-primary');
				$('[name="remover"]').addClass('tooltip btn btn-large btn-block disabled');

				$('[name="editar"]').attr('disabled','disabled');
				$('[name="editar"]').removeClass('tooltip btn-primary');
				$('[name="editar"]').addClass('tooltip btn btn-large btn-block disabled');
			}
		}
		
	}
	
	function valida_hide_button(id_perf){
		if(id_perf!=1){
			$('[name="publicar"]').hide();
			$('[name="aprovar"]').hide();
			$('[name="rejeitar"]').hide();
		}
	}
	
	function disable_user_comum(id_perf){
		if(id_perf!=1){
			$('[name="aprovar"]').hide();
			$('[name="publicar"]').hide();
			$('[name="rejeitar"]').hide();
			$('[name="remover"]').hide();
			
		}else{
			$('[name="aprovar"]').show();
			$('[name="publicar"]').show();
			$('[name="rejeitar"]').show();
		}
		if(status == 'N' || status == ""){
			$('[name="remover"]').show();
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
	
	function get_key_words(){
		var keys="";
		$('[name="hd_keywords"]').val('');
		$('span.tag').each(function(){
			keys += $.trim($(this).text()) +"|";
		});
		$('[name="hd_keywords"]').val(keys);
};
$('#tagsinput_tagsinput').focusout(function(){get_key_words();});
        var cache = {};
        var dados;
        function log( message ) {
            $('[name="hd_cat_id"]').val(message);
          }
        
        
//        -----------------------------------------------------------------------------------
        $( "#ac_categoria" ).autocomplete({
          source: function( request, response ) {
            var term = request.term;
            if ( term in cache ) {
              response( cache[ term ] );
              return;
            }
            $.getJSON( "http://localhost/portal-gic/index.php/intranet/categoria_cadastro/au_get_by_name?term=bola", request, function( data, status, xhr ) {
              cache[ term ] = data;
              response( $.map( data.dados, function( item ) {
                return {
                  label: item.nome_cat,
                  value: item.nome_cat,
                  id: item.id_cat
                }
              }));
              dados = data;
              console.log(dados);
            });
          },
          minLength: 2,
          select: function( event, ui ) {
              log( ui.item.id);
            },
        });
        
//        --------------------------------------------TESTE---------------------------------------

        
        
        
        
        
        //        ---------------------------------------fim teste--------------------------------------------
        
		$.get("http://localhost/portal-gic/index.php/intranet/login/get_perf",function(data,status){
			id_perf = data;
			success: valida_hide_button(id_perf);
				
		});
		
        $('tbody tr').click(function(){
        	$('tbody tr').each(function(){
        		$(this).removeClass('selected');
        	});
        	$(this).addClass('selected');
        	hide_button($(this).find('td[name="hd_status"]').text(),id_perf);
        	$('[name="id"]').val($(this).find('td[name="hd_id"]').text());
        });
        $('tbody tr').dblclick(function(){
        	var id = $(this).find('td[name="hd_id"]').text();
        	$('[name="id"]').val(id);
        	$('form').submit();
        });
});
$(window).load(function(){
		$('#canvasloader-container').addClass("centro hide");
		CKEDITOR.replace( 'editor1', {
		    toolbar: 'Basic',
		    uiColor: '#9AB8F3'
		});
});


