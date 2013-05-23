
$(document).ready(function() {
	// Pega valor dos acessos
	createLoad();
	$('.tooltip').tooltipster();
	$("#form").validate();
	$("#tagsinput").tagsInput();
	disabled_all();
	
	

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
		if ($('input:hidden[name=hd_editavel]').val() == 0 || $('[name="hd_id"]').val() > 0) {
			$('input').each(function() {
				$(this).iCheck('disable');
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
        $( "#ac_categoria" ).autocomplete({
          source: function( request, response ) {
            var term = request.term;
            if ( term in cache ) {
              response( cache[ term ] );
              return;
            }
            $.getJSON( "categoria_cadastro/au_get_by_name", request, function( data, status, xhr ) {
              cache[ term ] = data;
              response( $.map( data, function( item ) {
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
        
});
$(window).load(function(){
		$('#canvasloader-container').addClass("centro hide");
		CKEDITOR.replace( 'editor1', {
		    toolbar: 'Basic',
		    uiColor: '#9AB8F3'
		});
});


