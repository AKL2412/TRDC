(function(){
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
	})
})();