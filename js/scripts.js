$(document).ready(function() {

	var $buttons = $('.button');
	$buttons.each(function() {
		var $this = $(this);
		$this.html('<span>' + $this.html()  + '</span>');
	});
	
});