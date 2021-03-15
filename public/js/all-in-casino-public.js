jQuery(document).ready(function ($) {

	//Load slot iframe with button click
	$(".load-iframe").click(function () {
		var iframe = $("#aic-iframe");
		iframe.attr("src", iframe.data("src"));
		$(".iframe-wrap").hide();
	});

	//Show cta window in casino review page
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 500) {
			$(".single-casino-action").removeClass("hidden");
		}

		if (scroll < 500) {
			$(".single-casino-action").addClass("hidden");
		}
	});

});
