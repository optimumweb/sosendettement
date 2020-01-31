$(document).ready(function() {

	var $body = $('body');
	var $mainNav = $('#main-nav');

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
	
	if ( $body.hasClass('tax-repertoire') ) {
		$mainNav.find('.main-nav-blog').removeClass('current_page_parent');
		$mainNav.find('.main-nav-repertoire').addClass('current_page_parent');
	}
	
});
