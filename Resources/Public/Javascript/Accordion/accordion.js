$('.accordion').each(function(){
	options = $(this).find('.options').text();
	if(options) {
		options = $.parseJSON(options);
	} else {
		options = [];
	}
	$(this).find('.accordionContents').accordion(options);
});
