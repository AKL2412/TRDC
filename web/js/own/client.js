(function(){
	//cover($('body'))
	$('a.archiver').click(function(event){
		//event.preventDefault();


		var role = $(this).attr('role');
		$.post(role,{},function(data){
			alert(data.code+" :: "+data.message);
			if(data.code == 1)
				location.reload();
		});
		//return false;
	});
	$('form.form-rac input[type=search]').keyup(function(event){
		var value = $(this).val()
		if( value.toLowerCase() in lesLiens){
			location.href = lesLiens[value.toLowerCase()];

		}
	})
	$('form.recherche-client input').keyup(function(event){
		var radical = $(this).val()
		if(radical.length == 7 ){
			var lien = rechercheClientLien
			//alert(radical)
			$.post(lien,{radical:radical},function(data){
				if(data.code == 1 )
					location.href = data.lien;
				else{
					$(this).css('border-color','red');
				}
			})
		}
		$('form.recherche-client input').val(radical)
	});
	$('#voir-client-select').change(function(event){
		var url = $(this).attr('url');
		var rub = $(this).val();
		var link = url+"/voir/"+rub
		
		cover($('div#voir-client-div'))
		$.post(link,{},function(data){
			$('div#voir-client-div').html(data)
		}).fail(function(error){
			$('div#voir-client-div').html(error.reponseText)
		});
	});
	$('#etats-client-select').change(function(event){
		var url = $(this).attr('url');
		var rub = $(this).val();
		var link = url+"/voir/"+rub
		
		cover($('div#etats-client-div'))
		//*
		$.post(link,{},function(data){
			$('div#etats-client-div').html(data)
		}).fail(function(error){
			$('div#etats-client-div').html(error.reponseText)
		});
		//*/
	});

})();

function cover($element){
	var div = $('<div class="cover"></div>');
	var img = $('<img src="'+loader+'" height="30">');
	div.html(img);
	$element.prepend(div);
}