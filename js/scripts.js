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
	
	var $gmap = $('#gmap');
	$gmap.data('href', $gmap.attr('hef')).attr('href', '#').hide();
	
	$('a.scroll-to, .scroll-to > a').click(function(e) {
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

$(window).load(function() {
	
	var $gmap = $('#gmap');
	$gmap.attr('href', $gmap.data('hef')).slideDown(10000);
	
});