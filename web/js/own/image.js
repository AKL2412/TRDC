(function(){
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