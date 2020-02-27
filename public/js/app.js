(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#toggleMenu').on('click', function () {
      $('.sidebar').toggleClass('closeSidebar');
      $('.page-content').toggleClass('closeSidebar');
  });

})(jQuery);
