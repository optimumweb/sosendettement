var $document = $(document);

$document.ready(function() {

	var $buttons = $('.button');
	$buttons.each(function() {
		var $this = $(this);
		$this.html( '<span>' + $this.html()  + '</span>' );
	});
	
	var $postTitles = $('.post-title');
	$postTitles.each(function() {
		var $this = $(this);
		var $a = $this.find('a');
		$a.html( '<span>' + $a.html()  + '</span>' );
	});
	
	var $pageTitles = $('.page-title');
	$pageTitles.each(function() {
		var $this = $(this);
		$this.html( '<span>' + $this.html() + '</span>' );
	});
	
	var $scrollTos = $('a.scroll-to, .scroll-to > a');
	$scrollTos.click(function(e) {
		e.preventDefault();
		var $this = $(this);
		var href = $this.attr('href');
		var $href = $(href);
		var duration = $this.data('duration') || 600;
		$.scrollTo( $href, duration, { onAfter: function() { window.location.hash = href; } } );
	});
	
});
