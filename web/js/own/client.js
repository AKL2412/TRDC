(function(){
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