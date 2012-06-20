$(document).ready(function() {

	var $buttons = $('.button');
	$buttons.each(function() {
		var $this = $(this);
		$this.html('<span>' + $this.html()  + '</span>');
	});
	
	var $postTitles = $('.post-title');
	$postTitles.each(function() {
		var $a = $(this).find('a');
		$a.html('<span>' + $a.html()  + '</span>');
	});
	
});