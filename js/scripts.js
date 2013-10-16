$(document).ready(function() {
        var today = new Date;
        var year = today.getFullYear();
        $('.cr').append(' &copy; '+ year + ' ');

		$('.container').wtGallery({
			num_display: 5,
			background_color: "#000",
			window_color: "#000",
			padding: 0,
			screen_width: 950,
			screen_height: 350,
			thumb_width: 156,
			thumb_height: 96,
			thumb_margin: 15,
			text_pane_align: "top",
			auto_rotate: false,
			delay: 60,
			trigger_stop: false,
			border: "0px solid #222222",
			image_nav: true,
			info_pane: false,
			thumb_nav: true,
			pagination: true,
			transition: "fade",
			transition_speed: "slow",
			segment_size: 30
		});        
});