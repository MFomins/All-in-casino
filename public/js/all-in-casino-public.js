jQuery(document).ready(function ($) {

	//Casino review toplist - show payments tab
	$('.casino-reviews-list').on('click', '.more-tab-button', function () {
		var mainTab = $(this).parent().parent().siblings("#main-tab");
		var paymentsTab = $(this).parent().parent().siblings("#payments-tab");
		var mainTabBtn = $(this).siblings(".main-tab-button");

		mainTab.hide();
		paymentsTab.show();
		mainTabBtn.show();
	});

	//Casino review toplist - show main tab
	$('.casino-reviews-list').on('click', '.main-tab-button', function () {
		var mainTab = $(this).parent().parent().siblings("#main-tab");
		var paymentsTab = $(this).parent().parent().siblings("#payments-tab");
		var mainTabBtn = $(this);

		mainTab.show();
		paymentsTab.hide();
		mainTabBtn.hide();
	});


	//Load slot iframe with button click
	$(".load-iframe").click(function () {
		var iframe = $("#aic-iframe");
		iframe.attr("src", iframe.data("src"));
		$(".iframe-wrap").hide();
	});
});
