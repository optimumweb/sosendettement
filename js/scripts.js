$(document).ready(function() {

	var $buttons = $('.button');
	$buttons.each(function() {
		var $this = $(this);
		$this.html('<span>' + $this.html()  + '</span>');
	});
	
	var $postTitles = $('.post-title');
	$postTitles.each(function() {
		var $this = $(this);
		$this.children('a').html('<span>' + $this.html()  + '</span>');
	});
	
});