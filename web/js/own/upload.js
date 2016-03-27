(function(){
$("form#data-form-edp").submit(function(){
	$link = $(this).attr('url');
	var form = $(this);
	var message = $(this).find('textarea:first').val();
	if(message.length > 0 ){
    var formData = new FormData($(this)[0]);

    $.ajax({
        url: $link,
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
            //alert(data)
            if(data.code == 1){
            	console.log(data);
            	if(data.alerte == 1)
            		alert(data.alerteMessage)
            	else{
            		var poste = $(data.poste);
            		$('#edp .edp-body').prepend(poste);
            		
            	}

            }else{
            	alert(data.message)
            }
            form.find('textarea:first').val("")
            form.find('input.surveiller').val("")
           form.find('#surveiller').text("")
        },
        fail: function(error){
        	alert(error.responseText);
        },
        cache: false,
        contentType: false,
        processData: false
    });
	}
    return false;
});


var exts = ['jpg','png','jpeg','pdf','doc',''];
	$('input.surveiller').change(function(evt){
	
		var tgt = evt.target || window.event.srcElement,
		files = tgt.files;
		var file = files[0];
		var smb = ((file.size/1000)/1000);
		
		if(smb < 100){
			var span = $('<span id="surveiller">bien</span>');
			$('#surveiller').remove();
			var url = $(this).val();
			span.insertAfter($(this))
				    if (FileReader && files && files.length) {
				        var fr = new FileReader();
				        fr.onload = function () {
				           span.text('Fichier chargé');
				           /*
				           setTimeout(function(){
				           	span.text(file.name)
				           },3000);
				           //*/
				        }
				        fr.onerror = function(error){
				        	span.text('Erreur');
				        }
				        fr.onprogress = function(data){
				        	var a =  Number(((data.loaded/data.total)*100).toFixed(2));
				        	//console.log(data.loaded+ " / " + data.total + " ==> " + a + "%");
				        	span.text(a + " %");
				        	//console.log(file);
				        	//console.log(evt);
				        }
				        fr.readAsDataURL(file);
				    }

				    // Not supported
				    else {
				    	alert('Fichier non supporté');
				    }
			}else{
				alert('Ficher trop volumineux');
				$(this).val('');
			}
	})
$("form#data-form-docs-ddc select:first").change(function(event){
	var select = $(this)
	var value = select.val();
	//console.log(value);
	var nom = $(select[0].selectedOptions).text().trim();
	if(value != 'vide'){
		$('form#data-form-docs-ddc #nom-fichier').val(nom);
	}else{
		$('form#data-form-docs-ddc #nom-fichier').val('');
	}
});

$("form#data-form-docs-ddc").submit(function(){
	$link = $(this).attr('url');
	$voirLien = $(this).attr('voir');
	var form = $(this);
	var fichier = $(this).find('#leFichier').val();
	if(fichier.length > 0 ){
		if($("form#data-form-docs-ddc #nom-fichier").val().length > 0){
	    var formData = new FormData($(this)[0]);
	    $.ajax({
	        url: $link,
	        type: 'POST',
	        data: formData,
	        async: false,
	        success: function (data) {
	            //alert(data)
	            if(data.code == 1){
	            	//console.log(data);
	            	if(data.alerte == 1)
	            		alert(data.alerteMessage)
	            	else{
	            		//var poste = $(data.poste);
	            		//$('#edp .edp-body').prepend(poste);
	            		
	            	}
	            	$("form#data-form-docs-ddc #message").html(data.message);
	            	$("form#data-form-docs-ddc #nom-fichier").val('')
	            	$("form#data-form-docs-ddc select:first").val('');
	            	cover($('#voirFichierDDC'))
	            	$.get($voirLien,function(d){
	            		$('#voirFichierDDC').html(d);
	            	})
	            }else{
	            	alert(data.message)
	            }
	            form.find('textarea:first').val("")
	            form.find('input.surveiller').val("")
	           form.find('#surveiller').text("")
	        },
	        fail: function(error){
	        	alert(error.responseText);
	        },
	        cache: false,
	        contentType: false,
	        processData: false
	    });
		}else{
			var texte = '<i class="fa-warning fa"></i> Indiquer le nom du fichier SVP!!';
			$("form#data-form-docs-ddc #message").html(texte);
		}
	}else{
		var texte = '<i class="fa-warning fa"></i> Importer le fichier SVP!!';
		$("form#data-form-docs-ddc #message").html(texte);
	}
    return false;
});
})();