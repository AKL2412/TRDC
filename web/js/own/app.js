(function(){

})();
function nextPage(event){
	var $containerId = event.data.containerId
	console.log(event.data)
	var $that = $(this);
	//*
	$url = $that.attr('url');
	if($('#'+$containerId).length > 0 ){
		var container = $('#'+$containerId);
		cover(container);
		$.get($url,function(donnees){
			container.html(donnees);
		})
	}else{
		alert('Erreur id : '+$containerId);
	}
	//*/
}
function cover($element){
	var div = $('<div class="cover"></div>');
	var img = $('<img src="'+loader+'" height="30">');
	div.html(img);
	$element.prepend(div);
}