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
        border: "none",
        image_nav: true,
        info_pane: false,
        thumb_nav: true,
        pagination: true,
        transition: "fade",
        transition_speed: "slow",
        segment_size: 30
    });
    $('.directors').wtGallery({
        num_display: 5,
        background_color: "#000",
        window_color: "#000",
        padding: 0,
        screen_width: 660,
        screen_height: 380,
        thumb_width: 160,
        thumb_height: 100,
        //thumb_margin: 15,
        text_pane_align: "top",
        auto_rotate: false,
        delay: 60,
        trigger_stop: false,
        border: "none",
        image_nav: true,
        info_pane: false,
        thumb_nav: true,
        pagination: true,
        transition: "fade",
        transition_speed: "slow",
        segment_size: 30
    });
    $('.panel-heading').click(function(){
        $('.panel-collapse').slideToggle(500);
    })
    .toggle( function() {
        $('.plus-minus').addClass('minus');
    }, function() {
        $('.plus-minus').removeClass('minus');
    });
    
    //video modal
    $('.directors').on('click', '.main-screen',  function() {
        var video =  $(this).find('a').attr('href');
        var path = $(this).parents('.directors').find('"'+video+'"').data('video');
        $(this).parents('.directors').find('"'+video+'"').show();
        $(this).parents('.panel').next('.modal-backdrop').show();
    });
    
    // Set history states
    $('.gallery-images').on('click', function(){
        var link = $(this).data('url');
        console.log(link);
        history.pushState(null, null, link);
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});