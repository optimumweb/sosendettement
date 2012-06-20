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
	
	$('.scroll-to').click(function(e) {
		e.preventDefault();
		var $this = $(this),
			href = $this.attr('href'),
			$href = $(href),
			duration = $this.data('duration') || 600;
		$.scrollTo(
			$href,
			duration,
			{
				onAfter: function() {
					window.location.hash = href;
				}
			}
		);
	});
	
});