(function(){

	var i = $('<i style="cursor:pointer" class="reduire fa-chevron-up fa pull-left" etat="open"></i>')
	
	i.click(function(event){
		var that = $(this);
		var heading = that.parent();
		var panel = heading.parent();
		var etat = that.attr('etat');
		
		if(etat == 'open'){
			that.attr('etat','close')
			that.removeClass('fa-chevron-up')
			that.addClass('fa-chevron-down')
			panel.animate({height : heading.height()+20},10)
		}else{
			that.attr('etat','open')
			that.removeClass('fa-chevron-down')
			that.addClass('fa-chevron-up')
			panel.animate({height : that.attr('h')},100)
		}
	})

	$(".panel .panel-heading").append(i);

	$.each($('i.reduire'),function(index,val){
		var that = $(this);
		var heading = that.parent();
		var panel = heading.parent();
		that.attr('h',panel.height());

		if(panel.find('.panel-footer').length == 0 ){
			that.attr('etat','close')
			that.removeClass('fa-chevron-up')
			that.addClass('fa-chevron-down')
			panel.animate({height : heading.height()+20},0)
		}
	})
	var exts = ['jpg','png','jpeg'];
	$('.image-block input').change(function(evt){
	

		var url = $(this).val();
		var tab = url.split('.');
		var extension = tab[tab.length -1 ];
		if($.inArray(extension.toLowerCase(),exts) != -1 ){
			var image = $('.image-block img:first');
			    var tgt = evt.target || window.event.srcElement,
			        files = tgt.files;

			    // FileReader support
			    if (FileReader && files && files.length) {
			        var fr = new FileReader();
			        fr.onload = function () {
			            //document.getElementById(outImage).src = fr.result;
			           image.attr('src',fr.result);
			        }
			        fr.readAsDataURL(files[0]);
			    }

			    // Not supported
			    else {
			    	alert('Fichier non supporté');
			    }
			
		}else{
			alert("Vueillez selectionner un ficher d'extension suivante : "+exts);
			$(this).val('');
		}
	})
})();