/**
 * Horizontal Thumbnail Style Gallery plugin for jQuery
 * Copyright (c) 2010 Allan Ma (http://codecanyon.net/user/webtako)
 * Version: 1.0 (05/23/2010)
 */
 
;(function($) {
    $.fn.wtGallery = function(params) {
        var TOP_LEFT = 0;
        var TOP_RIGHT = 1;
        var BOTTOM_LEFT = 2;
        var BOTTOM_RIGHT = 3;
        var LEFT_TOP = 4;
        var LEFT_BOTTOM = 5;
        var RIGHT_TOP = 6;
        var RIGHT_BOTTOM = 7;        
        var FADE_TRANSITION = "FADE";
        var SEG_TRANSITION = "SEGMENT";
        var NO_TRANSITION = "NONE";
        var SEG_DELAY = 100;
            
        function Gallery($obj, opts) {
            //set options
            var numDisplay = opts.num_display;
            var padding = opts.padding;
            var screenWidth = opts.screen_width;
            var screenHeight = opts.screen_height;
            var thumbWidth = opts.thumb_width;
            var thumbHeight = opts.thumb_height;
            var thumbMargin = opts.thumb_margin;
            var displayImageNav = opts.image_nav;
            var displayInfoPane = opts.info_pane;
            var displayThumbNav = opts.thumb_nav;
            var displayPagination = opts.pagination;
            var descAlign = opts.text_pane_align;
            var bgColor = opts.background_color;
            var winColor = opts.window_color;
            var border = opts.border;
            var rotate = opts.auto_rotate;
            var delay = opts.delay > 0 ? opts.delay * 1000 : 5000;
            var triggerStop = opts.trigger_stop;
            var segSize = opts.segment_size > 0 ? opts.segment_size : 30;
            var transition = opts.transition.toUpperCase();
            var transSpeed = opts.transition_speed.toLowerCase();
                
            var numThumbs = 0;
            var unitSize = 0;
            var backSlots = 0;
            var fwdSlots = 0;
            var numSlots = 0;    
            var currIndex = 0;
            var pos = 0;    
            var imgPaths;
            var imgs;        
            var horzPieces;
            var vertPieces;
            var segDir = 0;        
            var segIntId = null;
            var timerId = null;
        
            var $gallery = $("div.wt-gallery", $obj);               
            var $thumbnails = $("div.thumbnails", $obj);    
            var $mainScreen = $("div.main-screen", $obj);
            var $mainImg = $("#main-img", $obj);
            var $bgImg = $("#bg-img", $obj);
            var $desc = $(".desc", $obj);
            var $tmpDesc = $("div.tmp-desc", $obj);
            var $info = $("div.info-pane", $obj);
            var $cPanel = $("div.c-panel", $obj);
            var $pagination = $("div.pagination", $obj);
            var $prevBtn = $("#prev-btn", $obj);
            var $nextBtn = $("#next-btn", $obj);
            var $preloader = $("div.preloader", $obj);
            var $thumbsBack = $("#thumbs-back", $obj);
            var $thumbsFwd = $("#thumbs-fwd", $obj);
            var $hPieces;
            var $vPieces;
            
            var initGallery = function() {
                $mainImg.attr("src", "assets/spacer.png");
                numThumbs = $thumbnails.find("li").size();
                
                if (numThumbs < numDisplay) {
                    numDisplay = numThumbs;
                }
                
                numSlots = numThumbs - numDisplay;
                backSlots = 0;
                fwdSlots = numSlots;
                        
                //config main screen window
                $mainScreen.css({width:screenWidth, height:screenHeight, 
                                 "background-color":winColor, border:border});
                
                //config text description pane
                if (descAlign == "bottom") {
                    $desc.css({bottom:0, padding:5});
                    $info.css({top:0});
                }
                else {
                    $desc.css({top:0, padding:5});
                    $info.css({top:screenHeight - $info.outerHeight()});
                }
                
                $mainImg.css("background-color", winColor);
                $bgImg.css("background-color", winColor);
                
                var descPadding = $desc.outerWidth() - $desc.width();
                $desc.css({width:screenWidth - descPadding});
                $tmpDesc.css({width:screenWidth - descPadding});
                
                //config image nav buttons
                if (!displayImageNav) {
                    $prevBtn.css({display:"none"});
                    $nextBtn.css({display:"none"});
                }
                
                //config info pane
                if (!displayInfoPane) {
                    $info.css({display:"none"});
                }
                else {
                    var infoPadding = $info.outerWidth() - $info.width();
                    $info.width(screenWidth - infoPadding);    
                }
                
                //config preloader    
                $preloader.css({top: (screenHeight - $preloader.outerHeight())/2, 
                                left:(screenWidth -  $preloader.outerWidth())/2});
                
                $prevBtn.css({top:(screenHeight - $prevBtn.height())/2});              
                $nextBtn.css({top:(screenHeight - $nextBtn.height())/2});        
                
                //config thumbs
                $thumbnails.find("li div").css({width:thumbWidth, height:thumbHeight, 
                                                "background-color":winColor, border:border});
                $thumbnails.find("li").css({"margin-right":thumbMargin});
                unitSize = $thumbnails.find("li").outerWidth(true);
                $thumbnails.width((numDisplay * $thumbnails.find("li div").outerWidth()) + 
                                  ((numDisplay - 1) * thumbMargin));
                $thumbnails.find("ul").width(numThumbs * unitSize);
                
                //config thumb nav buttons
                if (!displayThumbNav || numThumbs <= numDisplay) {
                    $thumbsBack.css({display:"none"}).width(0);
                    $thumbsFwd.css({display:"none"}).width(0);
                }
                else {
                    var h = $thumbnails.find("li").outerHeight();
                    var b = ($thumbnails.find("li div").outerHeight() - $thumbsFwd.find("img").height())/2;
                    $thumbsBack.css({height:h}).find("img").css({bottom: b});
                    $thumbsFwd.css({height:h}).find("img").css({bottom: b});
                }
                
                //config pagination
                if (!displayPagination || numThumbs <= numDisplay) {
                    $pagination.css({display:"none"});
                    $pagination.css({width:0, height:0, padding:0});
                    displayPagination = false;
                }
                    
                //config control panel    
                $cPanel.width($thumbnails.outerWidth() + $thumbsBack.outerWidth() + $thumbsFwd.outerWidth());
                $cPanel.height( $thumbnails.outerHeight() + $pagination.outerHeight());
                
                //config gallery 
                $gallery.css({"background-color":bgColor, padding:padding, border:border});
                if ($mainScreen.outerWidth() >= $cPanel.outerWidth()) {
                    $gallery.css({width: $mainScreen.outerWidth(),
                                  height:$mainScreen.outerHeight() + $cPanel.outerHeight()});
                }
                else {
                    $gallery.css({width: $cPanel.outerWidth(),
                                  height:$mainScreen.outerHeight() + $cPanel.outerHeight()});
                }
                
                //init navigation controls & event handlers
                if (displayPagination) {
                    var numPage = Math.ceil(numThumbs/numDisplay);
                    var pageBtns = "";
                    for (var i = 0; i < numPage; i++) {            
                        pageBtns += "<img src='assets/circle.png' class='circle-btn'/>";
                    }
                    $pagination.append(pageBtns);            
                    $pagination.find(".circle-btn").click(moveToPage);
                }
                
                $thumbnails.find("li").click(
                    function(e) {
                        stopTimer(triggerStop);
                        currIndex = $(this).index();
                        loadContent(currIndex);
                        return false;
                    }
                );
            
                $thumbnails.find("li div").hover(
                    function(e) {
                        $(this).addClass("thumb-over");
                    },
                    function(e) {
                        $(this).removeClass("thumb-over");
                    }
                );
                
                $mainScreen.hover(
                    function(e) {
                        $prevBtn.stop().animate({left:0}, "normal");
                        $nextBtn.stop().animate({right:0}, "normal");
                    },
                    function(e) {
                        $prevBtn.stop().animate({left:-$prevBtn.width()}, "normal");
                        $nextBtn.stop().animate({right:-$nextBtn.width()}, "normal");
                    }
                );
                
                $nextBtn.click(imgFwd);
                $prevBtn.click(imgBack);
                $thumbsFwd.find("img").click(thumbsFwd);        
                $thumbsBack.find("img").click(thumbsBack);
                
                $(document).keypress(
                    function(e) {
                        if (e.keyCode == 39) {
                            imgFwd();
                        }
                        else if (e.keyCode == 37) {
                            imgBack();
                        }
                    }
                );
                
                if (transition == SEG_TRANSITION) {
                    initPieces();
                }
                
                //init image loading
                initImgLoad();
                
                //display initial image
                loadContent(currIndex);
                updatePagination();
            }
            
            //move main image back
            var imgBack = function() {
                stopTimer(triggerStop);
                currIndex = (currIndex > 0) ? currIndex - 1 : (numThumbs - 1);
                loadContent(currIndex);    
                moveThumbs(currIndex);
            }
            
            //move main image forward
            var imgFwd = function() {
                stopTimer(triggerStop);
                currIndex = (currIndex < numThumbs - 1) ? currIndex + 1 : 0;
                loadContent(currIndex);
                moveThumbs(currIndex);
            }
            
            //move thumbs back
            var thumbsBack = function() {
                if (triggerStop) {
                    stopTimer(true);
                }
                
                if (fwdSlots < numSlots) {
                    var numBack = numSlots - fwdSlots;
                    if (numBack >= numDisplay) {
                        numBack = numDisplay;
                    }
                    
                    fwdSlots += numBack;
                    backSlots -= numBack;
                    pos += numBack * unitSize;
                }
                else {
                    fwdSlots = 0;
                    backSlots = numSlots;
                    pos = -numSlots * unitSize;
                }
                
                $thumbnails.find("ul").stop().animate({left: pos}, "slow");
                updatePagination();
            }
                
            //move thumbs forward
            var thumbsFwd = function() {
                if (triggerStop) {
                    stopTimer(true);
                }
                
                if (backSlots < numSlots) {
                    var numFwd = numSlots - backSlots;
                    if (numFwd >= numDisplay) {
                        numFwd = numDisplay;
                    }
                    
                    backSlots += numFwd;
                    fwdSlots -= numFwd;        
                    pos -= numFwd * unitSize;    
                }
                else {
                    backSlots = 0;
                    fwdSlots = numSlots;        
                    pos = 0;        
                }
                
                $thumbnails.find("ul").stop().animate({left: pos}, "slow");
                updatePagination();
            }
                
            //move thumbs by index
            var moveThumbs = function(thumbIndex) {
                var prevIndex = Math.abs(pos/unitSize);
                if (thumbIndex >= prevIndex && thumbIndex < prevIndex + numDisplay) {
                    return;
                }
                        
                if (thumbIndex < numSlots) {                    
                    backSlots = thumbIndex;
                    fwdSlots = numSlots - thumbIndex;
                    pos = -thumbIndex * unitSize;                          
                }
                else {
                    backSlots = numSlots;
                    fwdSlots = 0;
                    pos = -numSlots * unitSize;
                }
                
                $thumbnails.find("ul").stop().animate({left: pos}, "slow");    
                updatePagination();
            }
                
            //update pagination buttons
            var  updatePagination = function() {
                var pageIndex = Math.ceil(backSlots/numDisplay);
                $pagination.find("img").attr("src", "assets/circle.png");
                $pagination.find("img:nth-child(" + (pageIndex + 1) + ")").attr("src", "assets/circlefill.png");
            }
            
            //go to page 
            var moveToPage = function() {        
                if (triggerStop) {
                    stopTimer(true);
                }
                
                var pageIndex = $(this).index();
                
                var numFwd = pageIndex * numDisplay;
                if (numFwd >= numSlots) {
                    numFwd = numSlots;
                }            
                
                backSlots = numFwd;
                fwdSlots = numSlots - numFwd;
                pos = -numFwd * unitSize;    
                
                $thumbnails.find("ul").stop().animate({left: pos}, "slow");
                updatePagination();
            }
                
            //rotate image
            var rotateImage = function() {
                stopTimer(false);
                currIndex = (currIndex < numThumbs - 1) ? currIndex + 1 : 0;
                loadContent(currIndex);
                moveThumbs(currIndex);
            }
            
            //update description
            var updateDesc = function(desc) {
                $tmpDesc.html(desc);    
                var descH = $tmpDesc.height();
                $desc.html("");   
                
                var offset = (descH != 0) ? 0 : $desc.height() - $desc.outerHeight();            
                if (descAlign == "top") {
                    $desc.stop().animate({height:descH, top:offset}, "slow", 
                        function () {  
                            $(this).html(desc);
                        }
                    );  
                }
                else {
                    $desc.stop().animate({height:descH, bottom:offset}, "slow", 
                        function () {  
                            $(this).html(desc);
                        }
                    );                  
                }
            }
            
            //load content
            var loadContent = function(i) {
                //get selected thumb's properties
                var thumb = $thumbnails.find("li:nth-child(" + (i+1) + ")");
                var desc = thumb.find(">dl").html();
                var urlLink = thumb.find(">a").attr("href");
                var urlTarget = thumb.find(">a").attr("target");            
        
                $thumbnails.find("li").removeClass("curr-thumb");                
                thumb.addClass("curr-thumb");
                
                //update info panel
                $info.html((i+1) + " / " + numThumbs);
            
                //update link
                if (urlLink != undefined) {
                    $mainScreen.find("a").attr("href", urlLink).attr("target", urlTarget);
                }
                else {
                    $mainScreen.find("a").attr("href", "#");
                }
                
                //update description
                updateDesc(desc);
                
                if (imgs[i]) {
                    $preloader.hide();
                    //display stored image    
                    displayContent(imgs[i]);
                }    
                else {    
                    //load new image
                    var currImg = new Image();        
                    $(currImg).attr("src", imgPaths[i]);
                    if (!currImg.complete) {
                        $preloader.show();
                        $(currImg).load(
                            function() {
                                $preloader.hide();
                                imgs[i] = jQuery.extend(true, {}, this);    
                                displayContent(currImg);
                            }
                        ).error(
                            function() {
                                alert("Error loading image");
                            }
                        );
                    }
                    else {
                        $preloader.hide();
                        imgs[i] = jQuery.extend(true, {}, currImg);
                        displayContent(imgs[i]);
                    }
                }        
            }
                
            //display image
            var displayContent = function(newImg) {
                if (transition == SEG_TRANSITION) {
                    segmentContent(newImg);
                }
                else if (transition == FADE_TRANSITION) {
                    fadeInContent(newImg);
                }
                else {
                    showContent(newImg);
                }
            }
            
            //display image (no transition)
            var showContent = function(newImg) {
                setImgPadding(newImg);
                    
                $mainImg.attr("src", newImg.src).show(0, 
                    function() {
                        startTimer();
                    }
                );    
            }
            
            //display image (fade transition)
            var fadeInContent = function(newImg) {
                $bgImg.css({top:$mainImg.css("top"), 
                            left:$mainImg.css("left"),
                            "padding-top":$mainImg.css("padding-top"), 
                            "padding-bottom":$mainImg.css("padding-bottom"),                                                                                    
                            "padding-left":$mainImg.css("padding-left"), 
                            "padding-right":$mainImg.css("padding-right")})
                            .attr("src", $mainImg.attr("src")).show();
        
                $mainImg.hide();    
                setImgPadding(newImg);
                $mainImg.attr("src", newImg.src).fadeIn(transSpeed, 
                    function() {                
                        startTimer();
                    }
                );    
            }
            
            //show image segment transition
            var segmentContent = function(newImg) {
                clearInterval(segIntId);
                segDir = Math.floor(Math.random() * 8);    
        
                setPieces(newImg);
                animatePieces(newImg);
            }
            
            //adjust image padding
            var setImgPadding = function(newImg) {
                var tMargin = (screenHeight - newImg.height)/2;
                var lMargin = (screenWidth  - newImg.width)/2
                var top = 0;
                var left = 0;
                var vertPadding = 0;
                var horzPadding = 0;
                
                if (tMargin > 0) {
                    vertPadding = tMargin;
                }
                else if (tMargin < 0) {
                    top = tMargin;
                }
                
                if (lMargin > 0) {
                    horzPadding = lMargin;
                }
                else if (lMargin < 0) {
                    left = lMargin;
                }
                
                $mainImg.css({top:top, left:left, 
                              "padding-top":vertPadding, "padding-bottom":vertPadding,
                              "padding-left":horzPadding, "padding-right":horzPadding});    
            }
        
            //init image loading
            var initImgLoad = function() {
                imgs = new Array(numThumbs);
                imgPaths = new Array(numThumbs);
                
                //init image paths
                $thumbnails.find("li").each(
                    function(n){
                        imgPaths[n] = $(this).find(">div>a").attr("href");
                    }
                );
                
                //start image loading        
                var loadIndex = 0;
                var img = new Image();
                $(img).attr("src", imgPaths[loadIndex]);
                
                //load image complete/error event handler
                $(img).load(
                    function() {
                        imgs[loadIndex] = jQuery.extend(true, {}, this);    
                        
                        loadIndex++
                        if (loadIndex < imgPaths.length) {
                            $(this).attr("src", imgPaths[loadIndex]);
                        }
                    }).error(function() {
                        //error loading image, continue next
                        loadIndex++
                        if (loadIndex < imgPaths.length) {
                            $(this).attr("src", imgPaths[loadIndex]);
                        }
                    }
                );
            }
                
            //start timer
            var startTimer = function() {
                if (rotate && timerId == null) {
                    timerId = setTimeout(rotateImage, delay);
                }
            }
            
            //stop timer
            var stopTimer = function(permStop) {
                clearTimeout(timerId);
                timerId = null;
                if (permStop) {
                    rotate = false;
                }
            }
            
            //thumb images onload
            $thumbnails.find("img").load(
                function() {
                    var $thumbDiv = $thumbnails.find("div");
                    $(this).css({left:($thumbDiv.width() - $(this).width())/2,
                                 top: ($thumbDiv.height() - $(this).height())/2});
                }
            );
            
            //init image segments
            var initPieces = function() {            
                vertPieces = new Array(Math.ceil($mainScreen.width()/segSize));
                horzPieces = new Array(Math.ceil($mainScreen.height()/segSize));
                
                var divs = "";
                for (var i = 0; i < vertPieces.length; i++) {
                    divs += "<div class='vpiece' id='" + i + "'></div>";
                }    
                for (var j = 0; j < horzPieces.length; j++) {
                    divs += "<div class='hpiece' id='" + j + "'></div>";
                }
                
                $mainScreen.find("a").append(divs);
                $vPieces = $("div.vpiece", $obj);
                $hPieces = $("div.hpiece", $obj);
                
                $vPieces.each(
                    function(n) {
                        vertPieces[n] = $(this).css({left: (n * segSize), 
                                                     width: segSize, 
                                                     height: screenHeight});
                    }
                );                
                $hPieces.each(
                    function(n) {
                        horzPieces[n] = $(this).css({top: (n * segSize), 
                                                    width: screenWidth,
                                                    height: segSize});
                    }                             
                );
            }
                    
            //set image segments
            var setPieces = function(newImg) {
                if (segDir == TOP_LEFT || segDir == TOP_RIGHT) {
                    setVerticalPieces(newImg, -screenHeight);
                }
                else if (segDir == BOTTOM_LEFT || segDir == BOTTOM_RIGHT) {
                    setVerticalPieces(newImg, screenHeight);
                }
                else if (segDir == RIGHT_TOP || segDir == RIGHT_BOTTOM) {
                    setHorizontalPieces(newImg, screenWidth);
                }
                else {
                    setHorizontalPieces(newImg, -screenWidth);                    
                }
            }
            
            //set vertical segments
            var setVerticalPieces = function(newImg, topPos) {
                $hPieces.stop().css("opacity", 0);
        
                var newImgSrc = newImg.src;
                var tOffset = (screenHeight - newImg.height)/2;
                var lOffset = (screenWidth - newImg.width)/2;
                for (var i = 0; i < vertPieces.length; i++) {                
                    $(vertPieces[i]).stop().css({
                            "background":winColor + " url('"+ newImgSrc +"') " + 
                            ((-i * segSize) + lOffset) + "px " + tOffset + "px no-repeat",
                            "backgroundPositionX": ((-i * segSize) + lOffset)  + "px",
                            "backgroundPositionY": tOffset + "px",
                            opacity:0,
                            top: topPos});                        
                }
            }
            
            //set horizontal segments
            var setHorizontalPieces = function(newImg, leftPos) {
                $vPieces.stop().css("opacity", 0);
                
                var newImgSrc = newImg.src;
                var tOffset = (screenHeight - newImg.height)/2;
                var lOffset = (screenWidth - newImg.width)/2;
                for (var i = 0; i < horzPieces.length; i++) {            
                    $(horzPieces[i]).stop().css({
                            "background":winColor + " url('"+ newImgSrc +"') " + 
                            lOffset + "px " + ((-i * segSize) + tOffset)  + "px no-repeat",
                            "backgroundPositionX": lOffset  + "px",
                            "backgroundPositionY": ((-i * segSize) + tOffset) + "px",
                            opacity:0,
                            left: leftPos});              
                }
            }
        
            //animate segments
            var animatePieces = function(newImg) {
                var lastVert = vertPieces.length - 1;
                var lastHorz = horzPieces.length - 1;
                
                if (segDir == TOP_LEFT || segDir == BOTTOM_LEFT) {
                    var i = 0;
                    segIntId = setInterval(
                        function() {
                            $(vertPieces[i++]).animate({top: 0, opacity:1}, transSpeed, "",
                                function() {
                                    if ($(this).attr("id") == lastVert) {
                                        setImgPadding(newImg);
                                        $mainImg.attr("src", newImg.src);
                                        startTimer();
                                    }
                                }
                            );
        
                            if (i == vertPieces.length) {
                                clearInterval(segIntId);
                            }
                        }, SEG_DELAY);
                }
                else if (segDir == TOP_RIGHT || segDir == BOTTOM_RIGHT) {
                    var i = lastVert;
                    segIntId = setInterval(
                        function() {
                            $(vertPieces[i--]).animate({top: 0, opacity:1}, transSpeed, "",
                                function() {
                                    if ($(this).attr("id") == 0) {
                                        setImgPadding(newImg);
                                        $mainImg.attr("src", newImg.src);
                                        startTimer();
                                    }
                                }
                            );
        
                            if (i < 0) {
                                clearInterval(segIntId);
                            }
                        }, SEG_DELAY);
                }
                else if (segDir == LEFT_BOTTOM || segDir == RIGHT_BOTTOM) {
                    var i = 0;
                    segIntId = setInterval(
                        function() {
                            $(horzPieces[i++]).animate({left: 0, opacity:1}, transSpeed, "",
                                function() {
                                    if ($(this).attr("id") == lastHorz) {
                                        setImgPadding(newImg);
                                        $mainImg.attr("src", newImg.src);
                                        startTimer();
                                    }
                                }
                            );
        
                            if (i == horzPieces.length) {
                                clearInterval(segIntId);
                            }
                        }, SEG_DELAY);
                }
                else {
                    var i = lastHorz;
                    segIntId = setInterval(
                        function() {
                            $(horzPieces[i--]).animate({left: 0, opacity:1}, transSpeed, "",
                                function() {
                                    if ($(this).attr("id") == 0) {
                                        setImgPadding(newImg);
                                        $mainImg.attr("src", newImg.src);
                                        startTimer();
                                    }
                                }
                            );
        
                            if (i < 0) {
                                clearInterval(segIntId);
                            }
                        }, SEG_DELAY);
                }
            }
            
            initGallery();
        }
        
        var defaults = { 
            num_display:4,
            background_color:"#EEEEEE",
            window_color:"#333333",
            padding:10,            
            screen_width:575,
            screen_height:323,
            thumb_width:125,
            thumb_height:70,
            thumb_margin:5,            
            text_pane_align:"top",    
            auto_rotate:true,
            delay:5,
            trigger_stop:false,
            border:"1px solid #222222",
            image_nav:true,            
            info_pane:true,        
            thumb_nav:true,
            pagination:true,
            transition:"fade",
            transition_speed:"normal",
            segment_size:30
        };
        
        var opts = $.extend({}, defaults, params);        
        return this.each(
            function() {
                var gallery = new Gallery($(this), opts);
            }
        );
    }
})(jQuery);

/*!
 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2010 M. Alsup
 * Version: 2.9999 (13-NOV-2011)
 * Dual licensed under the MIT and GPL licenses.
 * http://jquery.malsup.com/license.html
 * Requires: jQuery v1.3.2 or later
 */
;(function($, undefined) {

var ver = '2.9999';

// if $.support is not defined (pre jQuery 1.3) add what I need
if ($.support == undefined) {
    $.support = {
        opacity: !($.browser.msie)
    };
}

function debug(s) {
    $.fn.cycle.debug && log(s);
}        
function log() {
    window.console && console.log && console.log('[cycle] ' + Array.prototype.join.call(arguments,' '));
}
$.expr[':'].paused = function(el) {
    return el.cyclePause;
}


// the options arg can be...
//   a number  - indicates an immediate transition should occur to the given slide index
//   a string  - 'pause', 'resume', 'toggle', 'next', 'prev', 'stop', 'destroy' or the name of a transition effect (ie, 'fade', 'zoom', etc)
//   an object - properties to control the slideshow
//
// the arg2 arg can be...
//   the name of an fx (only used in conjunction with a numeric value for 'options')
//   the value true (only used in first arg == 'resume') and indicates
//     that the resume should occur immediately (not wait for next timeout)

$.fn.cycle = function(options, arg2) {
    var o = { s: this.selector, c: this.context };

    // in 1.3+ we can fix mistakes with the ready state
    if (this.length === 0 && options != 'stop') {
        if (!$.isReady && o.s) {
            log('DOM not ready, queuing slideshow');
            $(function() {
                $(o.s,o.c).cycle(options,arg2);
            });
            return this;
        }
        // is your DOM ready?  http://docs.jquery.com/Tutorials:Introducing_$(document).ready()
        log('terminating; zero elements found by selector' + ($.isReady ? '' : ' (DOM not ready)'));
        return this;
    }

    // iterate the matched nodeset
    return this.each(function() {
        var opts = handleArguments(this, options, arg2);
        if (opts === false)
            return;

        opts.updateActivePagerLink = opts.updateActivePagerLink || $.fn.cycle.updateActivePagerLink;
        
        // stop existing slideshow for this container (if there is one)
        if (this.cycleTimeout)
            clearTimeout(this.cycleTimeout);
        this.cycleTimeout = this.cyclePause = 0;

        var $cont = $(this);
        var $slides = opts.slideExpr ? $(opts.slideExpr, this) : $cont.children();
        var els = $slides.get();

        var opts2 = buildOptions($cont, $slides, els, opts, o);
        if (opts2 === false)
            return;

        if (els.length < 2) {
            log('terminating; too few slides: ' + els.length);
            return;
        }

        var startTime = opts2.continuous ? 10 : getTimeout(els[opts2.currSlide], els[opts2.nextSlide], opts2, !opts2.backwards);

        // if it's an auto slideshow, kick it off
        if (startTime) {
            startTime += (opts2.delay || 0);
            if (startTime < 10)
                startTime = 10;
            debug('first timeout: ' + startTime);
            this.cycleTimeout = setTimeout(function(){go(els,opts2,0,!opts.backwards)}, startTime);
        }
    });
};

function triggerPause(cont, byHover, onPager) {
    var opts = $(cont).data('cycle.opts');
    var paused = !!cont.cyclePause;
    if (paused && opts.paused)
        opts.paused(cont, opts, byHover, onPager);
    else if (!paused && opts.resumed)
        opts.resumed(cont, opts, byHover, onPager);
}

// process the args that were passed to the plugin fn
function handleArguments(cont, options, arg2) {
    if (cont.cycleStop == undefined)
        cont.cycleStop = 0;
    if (options === undefined || options === null)
        options = {};
    if (options.constructor == String) {
        switch(options) {
        case 'destroy':
        case 'stop':
            var opts = $(cont).data('cycle.opts');
            if (!opts)
                return false;
            cont.cycleStop++; // callbacks look for change
            if (cont.cycleTimeout)
                clearTimeout(cont.cycleTimeout);
            cont.cycleTimeout = 0;
            opts.elements && $(opts.elements).stop();
            $(cont).removeData('cycle.opts');
            if (options == 'destroy')
                destroy(opts);
            return false;
        case 'toggle':
            cont.cyclePause = (cont.cyclePause === 1) ? 0 : 1;
            checkInstantResume(cont.cyclePause, arg2, cont);
            triggerPause(cont);
            return false;
        case 'pause':
            cont.cyclePause = 1;
            triggerPause(cont);
            return false;
        case 'resume':
            cont.cyclePause = 0;
            checkInstantResume(false, arg2, cont);
            triggerPause(cont);
            return false;
        case 'prev':
        case 'next':
            var opts = $(cont).data('cycle.opts');
            if (!opts) {
                log('options not found, "prev/next" ignored');
                return false;
            }
            $.fn.cycle[options](opts);
            return false;
        default:
            options = { fx: options };
        };
        return options;
    }
    else if (options.constructor == Number) {
        // go to the requested slide
        var num = options;
        options = $(cont).data('cycle.opts');
        if (!options) {
            log('options not found, can not advance slide');
            return false;
        }
        if (num < 0 || num >= options.elements.length) {
            log('invalid slide index: ' + num);
            return false;
        }
        options.nextSlide = num;
        if (cont.cycleTimeout) {
            clearTimeout(cont.cycleTimeout);
            cont.cycleTimeout = 0;
        }
        if (typeof arg2 == 'string')
            options.oneTimeFx = arg2;
        go(options.elements, options, 1, num >= options.currSlide);
        return false;
    }
    return options;
    
    function checkInstantResume(isPaused, arg2, cont) {
        if (!isPaused && arg2 === true) { // resume now!
            var options = $(cont).data('cycle.opts');
            if (!options) {
                log('options not found, can not resume');
                return false;
            }
            if (cont.cycleTimeout) {
                clearTimeout(cont.cycleTimeout);
                cont.cycleTimeout = 0;
            }
            go(options.elements, options, 1, !options.backwards);
        }
    }
};

function removeFilter(el, opts) {
    if (!$.support.opacity && opts.cleartype && el.style.filter) {
        try { el.style.removeAttribute('filter'); }
        catch(smother) {} // handle old opera versions
    }
};

// unbind event handlers
function destroy(opts) {
    if (opts.next)
        $(opts.next).unbind(opts.prevNextEvent);
    if (opts.prev)
        $(opts.prev).unbind(opts.prevNextEvent);
    
    if (opts.pager || opts.pagerAnchorBuilder)
        $.each(opts.pagerAnchors || [], function() {
            this.unbind().remove();
        });
    opts.pagerAnchors = null;
    if (opts.destroy) // callback
        opts.destroy(opts);
};

// one-time initialization
function buildOptions($cont, $slides, els, options, o) {
    var startingSlideSpecified;
    // support metadata plugin (v1.0 and v2.0)
    var opts = $.extend({}, $.fn.cycle.defaults, options || {}, $.metadata ? $cont.metadata() : $.meta ? $cont.data() : {});
    var meta = $.isFunction($cont.data) ? $cont.data(opts.metaAttr) : null;
    if (meta)
        opts = $.extend(opts, meta);
    if (opts.autostop)
        opts.countdown = opts.autostopCount || els.length;

    var cont = $cont[0];
    $cont.data('cycle.opts', opts);
    opts.$cont = $cont;
    opts.stopCount = cont.cycleStop;
    opts.elements = els;
    opts.before = opts.before ? [opts.before] : [];
    opts.after = opts.after ? [opts.after] : [];

    // push some after callbacks
    if (!$.support.opacity && opts.cleartype)
        opts.after.push(function() { removeFilter(this, opts); });
    if (opts.continuous)
        opts.after.push(function() { go(els,opts,0,!opts.backwards); });

    saveOriginalOpts(opts);

    // clearType corrections
    if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
        clearTypeFix($slides);

    // container requires non-static position so that slides can be position within
    if ($cont.css('position') == 'static')
        $cont.css('position', 'relative');
    if (opts.width)
        $cont.width(opts.width);
    if (opts.height && opts.height != 'auto')
        $cont.height(opts.height);

    if (opts.startingSlide != undefined) {
        opts.startingSlide = parseInt(opts.startingSlide,10);
        if (opts.startingSlide >= els.length || opts.startSlide < 0)
            opts.startingSlide = 0; // catch bogus input
        else 
            startingSlideSpecified = true;
    }
    else if (opts.backwards)
        opts.startingSlide = els.length - 1;
    else
        opts.startingSlide = 0;

    // if random, mix up the slide array
    if (opts.random) {
        opts.randomMap = [];
        for (var i = 0; i < els.length; i++)
            opts.randomMap.push(i);
        opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
        if (startingSlideSpecified) {
            // try to find the specified starting slide and if found set start slide index in the map accordingly
            for ( var cnt = 0; cnt < els.length; cnt++ ) {
                if ( opts.startingSlide == opts.randomMap[cnt] ) {
                    opts.randomIndex = cnt;
                }
            }
        }
        else {
            opts.randomIndex = 1;
            opts.startingSlide = opts.randomMap[1];
        }
    }
    else if (opts.startingSlide >= els.length)
        opts.startingSlide = 0; // catch bogus input
    opts.currSlide = opts.startingSlide || 0;
    var first = opts.startingSlide;

    // set position and zIndex on all the slides
    $slides.css({position: 'absolute', top:0, left:0}).hide().each(function(i) {
        var z;
        if (opts.backwards)
            z = first ? i <= first ? els.length + (i-first) : first-i : els.length-i;
        else
            z = first ? i >= first ? els.length - (i-first) : first-i : els.length-i;
        $(this).css('z-index', z)
    });

    // make sure first slide is visible
    $(els[first]).css('opacity',1).show(); // opacity bit needed to handle restart use case
    removeFilter(els[first], opts);

    // stretch slides
    if (opts.fit) {
        if (!opts.aspect) {
            if (opts.width)
                $slides.width(opts.width);
            if (opts.height && opts.height != 'auto')
                $slides.height(opts.height);
        } else {
            $slides.each(function(){
                var $slide = $(this);
                var ratio = (opts.aspect === true) ? $slide.width()/$slide.height() : opts.aspect;
                if( opts.width && $slide.width() != opts.width ) {
                    $slide.width( opts.width );
                    $slide.height( opts.width / ratio );
                }

                if( opts.height && $slide.height() < opts.height ) {
                    $slide.height( opts.height );
                    $slide.width( opts.height * ratio );
                }
            });
        }
    }

    if (opts.center && ((!opts.fit) || opts.aspect)) {
        $slides.each(function(){
            var $slide = $(this);
            $slide.css({
                "margin-left": opts.width ?
                    ((opts.width - $slide.width()) / 2) + "px" :
                    0,
                "margin-top": opts.height ?
                    ((opts.height - $slide.height()) / 2) + "px" :
                    0
            });
        });
    }

    if (opts.center && !opts.fit && !opts.slideResize) {
          $slides.each(function(){
            var $slide = $(this);
            $slide.css({
                  "margin-left": opts.width ? ((opts.width - $slide.width()) / 2) + "px" : 0,
                  "margin-top": opts.height ? ((opts.height - $slide.height()) / 2) + "px" : 0
            });
          });
    }
        
    // stretch container
    var reshape = opts.containerResize && !$cont.innerHeight();
    if (reshape) { // do this only if container has no size http://tinyurl.com/da2oa9
        var maxw = 0, maxh = 0;
        for(var j=0; j < els.length; j++) {
            var $e = $(els[j]), e = $e[0], w = $e.outerWidth(), h = $e.outerHeight();
            if (!w) w = e.offsetWidth || e.width || $e.attr('width');
            if (!h) h = e.offsetHeight || e.height || $e.attr('height');
            maxw = w > maxw ? w : maxw;
            maxh = h > maxh ? h : maxh;
        }
        if (maxw > 0 && maxh > 0)
            $cont.css({width:maxw+'px',height:maxh+'px'});
    }

    var pauseFlag = false;  // https://github.com/malsup/cycle/issues/44
    if (opts.pause)
        $cont.hover(
            function(){
                pauseFlag = true;
                this.cyclePause++;
                triggerPause(cont, true);
            },
            function(){
                pauseFlag && this.cyclePause--;
                triggerPause(cont, true);
            }
        );

    if (supportMultiTransitions(opts) === false)
        return false;

    // apparently a lot of people use image slideshows without height/width attributes on the images.
    // Cycle 2.50+ requires the sizing info for every slide; this block tries to deal with that.
    var requeue = false;
    options.requeueAttempts = options.requeueAttempts || 0;
    $slides.each(function() {
        // try to get height/width of each slide
        var $el = $(this);
        this.cycleH = (opts.fit && opts.height) ? opts.height : ($el.height() || this.offsetHeight || this.height || $el.attr('height') || 0);
        this.cycleW = (opts.fit && opts.width) ? opts.width : ($el.width() || this.offsetWidth || this.width || $el.attr('width') || 0);

        if ( $el.is('img') ) {
            // sigh..  sniffing, hacking, shrugging...  this crappy hack tries to account for what browsers do when
            // an image is being downloaded and the markup did not include sizing info (height/width attributes);
            // there seems to be some "default" sizes used in this situation
            var loadingIE    = ($.browser.msie  && this.cycleW == 28 && this.cycleH == 30 && !this.complete);
            var loadingFF    = ($.browser.mozilla && this.cycleW == 34 && this.cycleH == 19 && !this.complete);
            var loadingOp    = ($.browser.opera && ((this.cycleW == 42 && this.cycleH == 19) || (this.cycleW == 37 && this.cycleH == 17)) && !this.complete);
            var loadingOther = (this.cycleH == 0 && this.cycleW == 0 && !this.complete);
            // don't requeue for images that are still loading but have a valid size
            if (loadingIE || loadingFF || loadingOp || loadingOther) {
                if (o.s && opts.requeueOnImageNotLoaded && ++options.requeueAttempts < 100) { // track retry count so we don't loop forever
                    log(options.requeueAttempts,' - img slide not loaded, requeuing slideshow: ', this.src, this.cycleW, this.cycleH);
                    setTimeout(function() {$(o.s,o.c).cycle(options)}, opts.requeueTimeout);
                    requeue = true;
                    return false; // break each loop
                }
                else {
                    log('could not determine size of image: '+this.src, this.cycleW, this.cycleH);
                }
            }
        }
        return true;
    });

    if (requeue)
        return false;

    opts.cssBefore = opts.cssBefore || {};
    opts.cssAfter = opts.cssAfter || {};
    opts.cssFirst = opts.cssFirst || {};
    opts.animIn = opts.animIn || {};
    opts.animOut = opts.animOut || {};

    $slides.not(':eq('+first+')').css(opts.cssBefore);
    $($slides[first]).css(opts.cssFirst);

    if (opts.timeout) {
        opts.timeout = parseInt(opts.timeout,10);
        // ensure that timeout and speed settings are sane
        if (opts.speed.constructor == String)
            opts.speed = $.fx.speeds[opts.speed] || parseInt(opts.speed,10);
        if (!opts.sync)
            opts.speed = opts.speed / 2;
        
        var buffer = opts.fx == 'none' ? 0 : opts.fx == 'shuffle' ? 500 : 250;
        while((opts.timeout - opts.speed) < buffer) // sanitize timeout
            opts.timeout += opts.speed;
    }
    if (opts.easing)
        opts.easeIn = opts.easeOut = opts.easing;
    if (!opts.speedIn)
        opts.speedIn = opts.speed;
    if (!opts.speedOut)
        opts.speedOut = opts.speed;

    opts.slideCount = els.length;
    opts.currSlide = opts.lastSlide = first;
    if (opts.random) {
        if (++opts.randomIndex == els.length)
            opts.randomIndex = 0;
        opts.nextSlide = opts.randomMap[opts.randomIndex];
    }
    else if (opts.backwards)
        opts.nextSlide = opts.startingSlide == 0 ? (els.length-1) : opts.startingSlide-1;
    else
        opts.nextSlide = opts.startingSlide >= (els.length-1) ? 0 : opts.startingSlide+1;

    // run transition init fn
    if (!opts.multiFx) {
        var init = $.fn.cycle.transitions[opts.fx];
        if ($.isFunction(init))
            init($cont, $slides, opts);
        else if (opts.fx != 'custom' && !opts.multiFx) {
            log('unknown transition: ' + opts.fx,'; slideshow terminating');
            return false;
        }
    }

    // fire artificial events
    var e0 = $slides[first];
    if (!opts.skipInitializationCallbacks) {
        if (opts.before.length)
            opts.before[0].apply(e0, [e0, e0, opts, true]);
        if (opts.after.length)
            opts.after[0].apply(e0, [e0, e0, opts, true]);
    }
    if (opts.next)
        $(opts.next).bind(opts.prevNextEvent,function(){return advance(opts,1)});
    if (opts.prev)
        $(opts.prev).bind(opts.prevNextEvent,function(){return advance(opts,0)});
    if (opts.pager || opts.pagerAnchorBuilder)
        buildPager(els,opts);

    exposeAddSlide(opts, els);

    return opts;
};

// save off original opts so we can restore after clearing state
function saveOriginalOpts(opts) {
    opts.original = { before: [], after: [] };
    opts.original.cssBefore = $.extend({}, opts.cssBefore);
    opts.original.cssAfter  = $.extend({}, opts.cssAfter);
    opts.original.animIn    = $.extend({}, opts.animIn);
    opts.original.animOut   = $.extend({}, opts.animOut);
    $.each(opts.before, function() { opts.original.before.push(this); });
    $.each(opts.after,  function() { opts.original.after.push(this); });
};

function supportMultiTransitions(opts) {
    var i, tx, txs = $.fn.cycle.transitions;
    // look for multiple effects
    if (opts.fx.indexOf(',') > 0) {
        opts.multiFx = true;
        opts.fxs = opts.fx.replace(/\s*/g,'').split(',');
        // discard any bogus effect names
        for (i=0; i < opts.fxs.length; i++) {
            var fx = opts.fxs[i];
            tx = txs[fx];
            if (!tx || !txs.hasOwnProperty(fx) || !$.isFunction(tx)) {
                log('discarding unknown transition: ',fx);
                opts.fxs.splice(i,1);
                i--;
            }
        }
        // if we have an empty list then we threw everything away!
        if (!opts.fxs.length) {
            log('No valid transitions named; slideshow terminating.');
            return false;
        }
    }
    else if (opts.fx == 'all') {  // auto-gen the list of transitions
        opts.multiFx = true;
        opts.fxs = [];
        for (p in txs) {
            tx = txs[p];
            if (txs.hasOwnProperty(p) && $.isFunction(tx))
                opts.fxs.push(p);
        }
    }
    if (opts.multiFx && opts.randomizeEffects) {
        // munge the fxs array to make effect selection random
        var r1 = Math.floor(Math.random() * 20) + 30;
        for (i = 0; i < r1; i++) {
            var r2 = Math.floor(Math.random() * opts.fxs.length);
            opts.fxs.push(opts.fxs.splice(r2,1)[0]);
        }
        debug('randomized fx sequence: ',opts.fxs);
    }
    return true;
};

// provide a mechanism for adding slides after the slideshow has started
function exposeAddSlide(opts, els) {
    opts.addSlide = function(newSlide, prepend) {
        var $s = $(newSlide), s = $s[0];
        if (!opts.autostopCount)
            opts.countdown++;
        els[prepend?'unshift':'push'](s);
        if (opts.els)
            opts.els[prepend?'unshift':'push'](s); // shuffle needs this
        opts.slideCount = els.length;

        // add the slide to the random map and resort
        if (opts.random) {
            opts.randomMap.push(opts.slideCount-1);
            opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
        }

        $s.css('position','absolute');
        $s[prepend?'prependTo':'appendTo'](opts.$cont);

        if (prepend) {
            opts.currSlide++;
            opts.nextSlide++;
        }

        if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
            clearTypeFix($s);

        if (opts.fit && opts.width)
            $s.width(opts.width);
        if (opts.fit && opts.height && opts.height != 'auto')
            $s.height(opts.height);
        s.cycleH = (opts.fit && opts.height) ? opts.height : $s.height();
        s.cycleW = (opts.fit && opts.width) ? opts.width : $s.width();

        $s.css(opts.cssBefore);

        if (opts.pager || opts.pagerAnchorBuilder)
            $.fn.cycle.createPagerAnchor(els.length-1, s, $(opts.pager), els, opts);

        if ($.isFunction(opts.onAddSlide))
            opts.onAddSlide($s);
        else
            $s.hide(); // default behavior
    };
}

// reset internal state; we do this on every pass in order to support multiple effects
$.fn.cycle.resetState = function(opts, fx) {
    fx = fx || opts.fx;
    opts.before = []; opts.after = [];
    opts.cssBefore = $.extend({}, opts.original.cssBefore);
    opts.cssAfter  = $.extend({}, opts.original.cssAfter);
    opts.animIn    = $.extend({}, opts.original.animIn);
    opts.animOut   = $.extend({}, opts.original.animOut);
    opts.fxFn = null;
    $.each(opts.original.before, function() { opts.before.push(this); });
    $.each(opts.original.after,  function() { opts.after.push(this); });

    // re-init
    var init = $.fn.cycle.transitions[fx];
    if ($.isFunction(init))
        init(opts.$cont, $(opts.elements), opts);
};

// this is the main engine fn, it handles the timeouts, callbacks and slide index mgmt
function go(els, opts, manual, fwd) {
    // opts.busy is true if we're in the middle of an animation
    if (manual && opts.busy && opts.manualTrump) {
        // let manual transitions requests trump active ones
        debug('manualTrump in go(), stopping active transition');
        $(els).stop(true,true);
        opts.busy = 0;
    }
    // don't begin another timeout-based transition if there is one active
    if (opts.busy) {
        debug('transition active, ignoring new tx request');
        return;
    }

    var p = opts.$cont[0], curr = els[opts.currSlide], next = els[opts.nextSlide];

    // stop cycling if we have an outstanding stop request
    if (p.cycleStop != opts.stopCount || p.cycleTimeout === 0 && !manual)
        return;

    // check to see if we should stop cycling based on autostop options
    if (!manual && !p.cyclePause && !opts.bounce &&
        ((opts.autostop && (--opts.countdown <= 0)) ||
        (opts.nowrap && !opts.random && opts.nextSlide < opts.currSlide))) {
        if (opts.end)
            opts.end(opts);
        return;
    }

    // if slideshow is paused, only transition on a manual trigger
    var changed = false;
    if ((manual || !p.cyclePause) && (opts.nextSlide != opts.currSlide)) {
        changed = true;
        var fx = opts.fx;
        // keep trying to get the slide size if we don't have it yet
        curr.cycleH = curr.cycleH || $(curr).height();
        curr.cycleW = curr.cycleW || $(curr).width();
        next.cycleH = next.cycleH || $(next).height();
        next.cycleW = next.cycleW || $(next).width();

        // support multiple transition types
        if (opts.multiFx) {
            if (fwd && (opts.lastFx == undefined || ++opts.lastFx >= opts.fxs.length))
                opts.lastFx = 0;
            else if (!fwd && (opts.lastFx == undefined || --opts.lastFx < 0))
                opts.lastFx = opts.fxs.length - 1;
            fx = opts.fxs[opts.lastFx];
        }

        // one-time fx overrides apply to:  $('div').cycle(3,'zoom');
        if (opts.oneTimeFx) {
            fx = opts.oneTimeFx;
            opts.oneTimeFx = null;
        }

        $.fn.cycle.resetState(opts, fx);

        // run the before callbacks
        if (opts.before.length)
            $.each(opts.before, function(i,o) {
                if (p.cycleStop != opts.stopCount) return;
                o.apply(next, [curr, next, opts, fwd]);
            });

        // stage the after callacks
        var after = function() {
            opts.busy = 0;
            $.each(opts.after, function(i,o) {
                if (p.cycleStop != opts.stopCount) return;
                o.apply(next, [curr, next, opts, fwd]);
            });
            if (!p.cycleStop) {
                // queue next transition
                queueNext();
            }
        };

        debug('tx firing('+fx+'); currSlide: ' + opts.currSlide + '; nextSlide: ' + opts.nextSlide);
        
        // get ready to perform the transition
        opts.busy = 1;
        if (opts.fxFn) // fx function provided?
            opts.fxFn(curr, next, opts, after, fwd, manual && opts.fastOnEvent);
        else if ($.isFunction($.fn.cycle[opts.fx])) // fx plugin ?
            $.fn.cycle[opts.fx](curr, next, opts, after, fwd, manual && opts.fastOnEvent);
        else
            $.fn.cycle.custom(curr, next, opts, after, fwd, manual && opts.fastOnEvent);
    }
    else {
        queueNext();
    }

    if (changed || opts.nextSlide == opts.currSlide) {
        // calculate the next slide
        opts.lastSlide = opts.currSlide;
        if (opts.random) {
            opts.currSlide = opts.nextSlide;
            if (++opts.randomIndex == els.length) {
                opts.randomIndex = 0;
                opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
            }
            opts.nextSlide = opts.randomMap[opts.randomIndex];
            if (opts.nextSlide == opts.currSlide)
                opts.nextSlide = (opts.currSlide == opts.slideCount - 1) ? 0 : opts.currSlide + 1;
        }
        else if (opts.backwards) {
            var roll = (opts.nextSlide - 1) < 0;
            if (roll && opts.bounce) {
                opts.backwards = !opts.backwards;
                opts.nextSlide = 1;
                opts.currSlide = 0;
            }
            else {
                opts.nextSlide = roll ? (els.length-1) : opts.nextSlide-1;
                opts.currSlide = roll ? 0 : opts.nextSlide+1;
            }
        }
        else { // sequence
            var roll = (opts.nextSlide + 1) == els.length;
            if (roll && opts.bounce) {
                opts.backwards = !opts.backwards;
                opts.nextSlide = els.length-2;
                opts.currSlide = els.length-1;
            }
            else {
                opts.nextSlide = roll ? 0 : opts.nextSlide+1;
                opts.currSlide = roll ? els.length-1 : opts.nextSlide-1;
            }
        }
    }
    if (changed && opts.pager)
        opts.updateActivePagerLink(opts.pager, opts.currSlide, opts.activePagerClass);
    
    function queueNext() {
        // stage the next transition
        var ms = 0, timeout = opts.timeout;
        if (opts.timeout && !opts.continuous) {
            ms = getTimeout(els[opts.currSlide], els[opts.nextSlide], opts, fwd);
         if (opts.fx == 'shuffle')
            ms -= opts.speedOut;
      }
        else if (opts.continuous && p.cyclePause) // continuous shows work off an after callback, not this timer logic
            ms = 10;
        if (ms > 0)
            p.cycleTimeout = setTimeout(function(){ go(els, opts, 0, !opts.backwards) }, ms);
    }
};

// invoked after transition
$.fn.cycle.updateActivePagerLink = function(pager, currSlide, clsName) {
   $(pager).each(function() {
       $(this).children().removeClass(clsName).eq(currSlide).addClass(clsName);
   });
};

// calculate timeout value for current transition
function getTimeout(curr, next, opts, fwd) {
    if (opts.timeoutFn) {
        // call user provided calc fn
        var t = opts.timeoutFn.call(curr,curr,next,opts,fwd);
        while (opts.fx != 'none' && (t - opts.speed) < 250) // sanitize timeout
            t += opts.speed;
        debug('calculated timeout: ' + t + '; speed: ' + opts.speed);
        if (t !== false)
            return t;
    }
    return opts.timeout;
};

// expose next/prev function, caller must pass in state
$.fn.cycle.next = function(opts) { advance(opts,1); };
$.fn.cycle.prev = function(opts) { advance(opts,0);};

// advance slide forward or back
function advance(opts, moveForward) {
    var val = moveForward ? 1 : -1;
    var els = opts.elements;
    var p = opts.$cont[0], timeout = p.cycleTimeout;
    if (timeout) {
        clearTimeout(timeout);
        p.cycleTimeout = 0;
    }
    if (opts.random && val < 0) {
        // move back to the previously display slide
        opts.randomIndex--;
        if (--opts.randomIndex == -2)
            opts.randomIndex = els.length-2;
        else if (opts.randomIndex == -1)
            opts.randomIndex = els.length-1;
        opts.nextSlide = opts.randomMap[opts.randomIndex];
    }
    else if (opts.random) {
        opts.nextSlide = opts.randomMap[opts.randomIndex];
    }
    else {
        opts.nextSlide = opts.currSlide + val;
        if (opts.nextSlide < 0) {
            if (opts.nowrap) return false;
            opts.nextSlide = els.length - 1;
        }
        else if (opts.nextSlide >= els.length) {
            if (opts.nowrap) return false;
            opts.nextSlide = 0;
        }
    }

    var cb = opts.onPrevNextEvent || opts.prevNextClick; // prevNextClick is deprecated
    if ($.isFunction(cb))
        cb(val > 0, opts.nextSlide, els[opts.nextSlide]);
    go(els, opts, 1, moveForward);
    return false;
};

function buildPager(els, opts) {
    var $p = $(opts.pager);
    $.each(els, function(i,o) {
        $.fn.cycle.createPagerAnchor(i,o,$p,els,opts);
    });
    opts.updateActivePagerLink(opts.pager, opts.startingSlide, opts.activePagerClass);
};

$.fn.cycle.createPagerAnchor = function(i, el, $p, els, opts) {
    var a;
    if ($.isFunction(opts.pagerAnchorBuilder)) {
        a = opts.pagerAnchorBuilder(i,el);
        debug('pagerAnchorBuilder('+i+', el) returned: ' + a);
    }
    else
        a = '<a href="#">'+(i+1)+'</a>';
        
    if (!a)
        return;
    var $a = $(a);
    // don't reparent if anchor is in the dom
    if ($a.parents('body').length === 0) {
        var arr = [];
        if ($p.length > 1) {
            $p.each(function() {
                var $clone = $a.clone(true);
                $(this).append($clone);
                arr.push($clone[0]);
            });
            $a = $(arr);
        }
        else {
            $a.appendTo($p);
        }
    }

    opts.pagerAnchors =  opts.pagerAnchors || [];
    opts.pagerAnchors.push($a);
    
    var pagerFn = function(e) {
        e.preventDefault();
        opts.nextSlide = i;
        var p = opts.$cont[0], timeout = p.cycleTimeout;
        if (timeout) {
            clearTimeout(timeout);
            p.cycleTimeout = 0;
        }
        var cb = opts.onPagerEvent || opts.pagerClick; // pagerClick is deprecated
        if ($.isFunction(cb))
            cb(opts.nextSlide, els[opts.nextSlide]);
        go(els,opts,1,opts.currSlide < i); // trigger the trans
//        return false; // <== allow bubble
    }
    
    if ( /mouseenter|mouseover/i.test(opts.pagerEvent) ) {
        $a.hover(pagerFn, function(){/* no-op */} );
    }
    else {
        $a.bind(opts.pagerEvent, pagerFn);
    }
    
    if ( ! /^click/.test(opts.pagerEvent) && !opts.allowPagerClickBubble)
        $a.bind('click.cycle', function(){return false;}); // suppress click
    
    var cont = opts.$cont[0];
    var pauseFlag = false; // https://github.com/malsup/cycle/issues/44
    if (opts.pauseOnPagerHover) {
        $a.hover(
            function() { 
                pauseFlag = true;
                cont.cyclePause++; 
                triggerPause(cont,true,true);
            }, function() { 
                pauseFlag && cont.cyclePause--; 
                triggerPause(cont,true,true);
            } 
        );
    }
};

// helper fn to calculate the number of slides between the current and the next
$.fn.cycle.hopsFromLast = function(opts, fwd) {
    var hops, l = opts.lastSlide, c = opts.currSlide;
    if (fwd)
        hops = c > l ? c - l : opts.slideCount - l;
    else
        hops = c < l ? l - c : l + opts.slideCount - c;
    return hops;
};

// fix clearType problems in ie6 by setting an explicit bg color
// (otherwise text slides look horrible during a fade transition)
function clearTypeFix($slides) {
    debug('applying clearType background-color hack');
    function hex(s) {
        s = parseInt(s,10).toString(16);
        return s.length < 2 ? '0'+s : s;
    };
    function getBg(e) {
        for ( ; e && e.nodeName.toLowerCase() != 'html'; e = e.parentNode) {
            var v = $.css(e,'background-color');
            if (v && v.indexOf('rgb') >= 0 ) {
                var rgb = v.match(/\d+/g);
                return '#'+ hex(rgb[0]) + hex(rgb[1]) + hex(rgb[2]);
            }
            if (v && v != 'transparent')
                return v;
        }
        return '#ffffff';
    };
    $slides.each(function() { $(this).css('background-color', getBg(this)); });
};

// reset common props before the next transition
$.fn.cycle.commonReset = function(curr,next,opts,w,h,rev) {
    $(opts.elements).not(curr).hide();
    if (typeof opts.cssBefore.opacity == 'undefined')
        opts.cssBefore.opacity = 1;
    opts.cssBefore.display = 'block';
    if (opts.slideResize && w !== false && next.cycleW > 0)
        opts.cssBefore.width = next.cycleW;
    if (opts.slideResize && h !== false && next.cycleH > 0)
        opts.cssBefore.height = next.cycleH;
    opts.cssAfter = opts.cssAfter || {};
    opts.cssAfter.display = 'none';
    $(curr).css('zIndex',opts.slideCount + (rev === true ? 1 : 0));
    $(next).css('zIndex',opts.slideCount + (rev === true ? 0 : 1));
};

// the actual fn for effecting a transition
$.fn.cycle.custom = function(curr, next, opts, cb, fwd, speedOverride) {
    var $l = $(curr), $n = $(next);
    var speedIn = opts.speedIn, speedOut = opts.speedOut, easeIn = opts.easeIn, easeOut = opts.easeOut;
    $n.css(opts.cssBefore);
    if (speedOverride) {
        if (typeof speedOverride == 'number')
            speedIn = speedOut = speedOverride;
        else
            speedIn = speedOut = 1;
        easeIn = easeOut = null;
    }
    var fn = function() {
        $n.animate(opts.animIn, speedIn, easeIn, function() {
            cb();
        });
    };
    $l.animate(opts.animOut, speedOut, easeOut, function() {
        $l.css(opts.cssAfter);
        if (!opts.sync) 
            fn();
    });
    if (opts.sync) fn();
};

// transition definitions - only fade is defined here, transition pack defines the rest
$.fn.cycle.transitions = {
    fade: function($cont, $slides, opts) {
        $slides.not(':eq('+opts.currSlide+')').css('opacity',0);
        opts.before.push(function(curr,next,opts) {
            $.fn.cycle.commonReset(curr,next,opts);
            opts.cssBefore.opacity = 0;
        });
        opts.animIn       = { opacity: 1 };
        opts.animOut   = { opacity: 0 };
        opts.cssBefore = { top: 0, left: 0 };
    }
};

$.fn.cycle.ver = function() { return ver; };

// override these globally if you like (they are all optional)
$.fn.cycle.defaults = {
    activePagerClass: 'activeSlide', // class name used for the active pager link
    after:           null,  // transition callback (scope set to element that was shown):  function(currSlideElement, nextSlideElement, options, forwardFlag)
    allowPagerClickBubble: false, // allows or prevents click event on pager anchors from bubbling
    animIn:           null,  // properties that define how the slide animates in
    animOut:       null,  // properties that define how the slide animates out
    aspect:           false,  // preserve aspect ratio during fit resizing, cropping if necessary (must be used with fit option)
    autostop:       0,      // true to end slideshow after X transitions (where X == slide count)
    autostopCount: 0,      // number of transitions (optionally used with autostop to define X)
    backwards:     false, // true to start slideshow at last slide and move backwards through the stack
    before:           null,  // transition callback (scope set to element to be shown):     function(currSlideElement, nextSlideElement, options, forwardFlag)
    center:        null,  // set to true to have cycle add top/left margin to each slide (use with width and height options)
    cleartype:       !$.support.opacity,  // true if clearType corrections should be applied (for IE)
    cleartypeNoBg: false, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
    containerResize: 1,      // resize container to fit largest slide
    continuous:       0,      // true to start next transition immediately after current one completes
    cssAfter:       null,  // properties that defined the state of the slide after transitioning out
    cssBefore:       null,  // properties that define the initial state of the slide before transitioning in
    delay:           0,      // additional delay (in ms) for first transition (hint: can be negative)
    easeIn:           null,  // easing for "in" transition
    easeOut:       null,  // easing for "out" transition
    easing:           null,  // easing method for both in and out transitions
    end:           null,  // callback invoked when the slideshow terminates (use with autostop or nowrap options): function(options)
    fastOnEvent:   0,      // force fast transitions when triggered manually (via pager or prev/next); value == time in ms
    fit:           0,      // force slides to fit container
    fx:              'fade', // name of transition effect (or comma separated names, ex: 'fade,scrollUp,shuffle')
    fxFn:           null,  // function used to control the transition: function(currSlideElement, nextSlideElement, options, afterCalback, forwardFlag)
    height:          'auto', // container height (if the 'fit' option is true, the slides will be set to this height as well)
    manualTrump:   true,  // causes manual transition to stop an active transition instead of being ignored
    metaAttr:     'cycle',// data- attribute that holds the option data for the slideshow
    next:           null,  // element, jQuery object, or jQuery selector string for the element to use as event trigger for next slide
    nowrap:           0,      // true to prevent slideshow from wrapping
    onPagerEvent:  null,  // callback fn for pager events: function(zeroBasedSlideIndex, slideElement)
    onPrevNextEvent: null,// callback fn for prev/next events: function(isNext, zeroBasedSlideIndex, slideElement)
    pager:           null,  // element, jQuery object, or jQuery selector string for the element to use as pager container
    pagerAnchorBuilder: null, // callback fn for building anchor links:  function(index, DOMelement)
    pagerEvent:      'click.cycle', // name of event which drives the pager navigation
    pause:           0,      // true to enable "pause on hover"
    pauseOnPagerHover: 0, // true to pause when hovering over pager link
    prev:           null,  // element, jQuery object, or jQuery selector string for the element to use as event trigger for previous slide
    prevNextEvent:'click.cycle',// event which drives the manual transition to the previous or next slide
    random:           0,      // true for random, false for sequence (not applicable to shuffle fx)
    randomizeEffects: 1,  // valid when multiple effects are used; true to make the effect sequence random
    requeueOnImageNotLoaded: true, // requeue the slideshow if any image slides are not yet loaded
    requeueTimeout: 250,  // ms delay for requeue
    rev:           0,      // causes animations to transition in reverse (for effects that support it such as scrollHorz/scrollVert/shuffle)
    shuffle:       null,  // coords for shuffle animation, ex: { top:15, left: 200 }
    skipInitializationCallbacks: false, // set to true to disable the first before/after callback that occurs prior to any transition
    slideExpr:       null,  // expression for selecting slides (if something other than all children is required)
    slideResize:   1,     // force slide width/height to fixed size before every transition
    speed:           1000,  // speed of the transition (any valid fx speed value)
    speedIn:       null,  // speed of the 'in' transition
    speedOut:       null,  // speed of the 'out' transition
    startingSlide: undefined,      // zero-based index of the first slide to be displayed
    sync:           1,      // true if in/out transitions should occur simultaneously
    timeout:       4000,  // milliseconds between slide transitions (0 to disable auto advance)
    timeoutFn:     null,  // callback for determining per-slide timeout value:  function(currSlideElement, nextSlideElement, options, forwardFlag)
    updateActivePagerLink: null, // callback fn invoked to update the active pager link (adds/removes activePagerClass style)
    width:         null   // container width (if the 'fit' option is true, the slides will be set to this width as well)
};

})(jQuery);


/*!
 * jQuery Cycle Plugin Transition Definitions
 * This script is a plugin for the jQuery Cycle Plugin
 * Examples and documentation at: http://malsup.com/jquery/cycle/
 * Copyright (c) 2007-2010 M. Alsup
 * Version:     2.73
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
(function($) {

//
// These functions define slide initialization and properties for the named
// transitions. To save file size feel free to remove any of these that you
// don't need.
//
$.fn.cycle.transitions.none = function($cont, $slides, opts) {
    opts.fxFn = function(curr,next,opts,after){
        $(next).show();
        $(curr).hide();
        after();
    };
};

// not a cross-fade, fadeout only fades out the top slide
$.fn.cycle.transitions.fadeout = function($cont, $slides, opts) {
    $slides.not(':eq('+opts.currSlide+')').css({ display: 'block', 'opacity': 1 });
    opts.before.push(function(curr,next,opts,w,h,rev) {
        $(curr).css('zIndex',opts.slideCount + (!rev === true ? 1 : 0));
        $(next).css('zIndex',opts.slideCount + (!rev === true ? 0 : 1));
    });
    opts.animIn.opacity = 1;
    opts.animOut.opacity = 0;
    opts.cssBefore.opacity = 1;
    opts.cssBefore.display = 'block';
    opts.cssAfter.zIndex = 0;
};

// scrollUp/Down/Left/Right
$.fn.cycle.transitions.scrollUp = function($cont, $slides, opts) {
    $cont.css('overflow','hidden');
    opts.before.push($.fn.cycle.commonReset);
    var h = $cont.height();
    opts.cssBefore.top = h;
    opts.cssBefore.left = 0;
    opts.cssFirst.top = 0;
    opts.animIn.top = 0;
    opts.animOut.top = -h;
};
$.fn.cycle.transitions.scrollDown = function($cont, $slides, opts) {
    $cont.css('overflow','hidden');
    opts.before.push($.fn.cycle.commonReset);
    var h = $cont.height();
    opts.cssFirst.top = 0;
    opts.cssBefore.top = -h;
    opts.cssBefore.left = 0;
    opts.animIn.top = 0;
    opts.animOut.top = h;
};
$.fn.cycle.transitions.scrollLeft = function($cont, $slides, opts) {
    $cont.css('overflow','hidden');
    opts.before.push($.fn.cycle.commonReset);
    var w = $cont.width();
    opts.cssFirst.left = 0;
    opts.cssBefore.left = w;
    opts.cssBefore.top = 0;
    opts.animIn.left = 0;
    opts.animOut.left = 0-w;
};
$.fn.cycle.transitions.scrollRight = function($cont, $slides, opts) {
    $cont.css('overflow','hidden');
    opts.before.push($.fn.cycle.commonReset);
    var w = $cont.width();
    opts.cssFirst.left = 0;
    opts.cssBefore.left = -w;
    opts.cssBefore.top = 0;
    opts.animIn.left = 0;
    opts.animOut.left = w;
};
$.fn.cycle.transitions.scrollHorz = function($cont, $slides, opts) {
    $cont.css('overflow','hidden').width();
    opts.before.push(function(curr, next, opts, fwd) {
        if (opts.rev)
            fwd = !fwd;
        $.fn.cycle.commonReset(curr,next,opts);
        opts.cssBefore.left = fwd ? (next.cycleW-1) : (1-next.cycleW);
        opts.animOut.left = fwd ? -curr.cycleW : curr.cycleW;
    });
    opts.cssFirst.left = 0;
    opts.cssBefore.top = 0;
    opts.animIn.left = 0;
    opts.animOut.top = 0;
};
$.fn.cycle.transitions.scrollVert = function($cont, $slides, opts) {
    $cont.css('overflow','hidden');
    opts.before.push(function(curr, next, opts, fwd) {
        if (opts.rev)
            fwd = !fwd;
        $.fn.cycle.commonReset(curr,next,opts);
        opts.cssBefore.top = fwd ? (1-next.cycleH) : (next.cycleH-1);
        opts.animOut.top = fwd ? curr.cycleH : -curr.cycleH;
    });
    opts.cssFirst.top = 0;
    opts.cssBefore.left = 0;
    opts.animIn.top = 0;
    opts.animOut.left = 0;
};

// slideX/slideY
$.fn.cycle.transitions.slideX = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $(opts.elements).not(curr).hide();
        $.fn.cycle.commonReset(curr,next,opts,false,true);
        opts.animIn.width = next.cycleW;
    });
    opts.cssBefore.left = 0;
    opts.cssBefore.top = 0;
    opts.cssBefore.width = 0;
    opts.animIn.width = 'show';
    opts.animOut.width = 0;
};
$.fn.cycle.transitions.slideY = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $(opts.elements).not(curr).hide();
        $.fn.cycle.commonReset(curr,next,opts,true,false);
        opts.animIn.height = next.cycleH;
    });
    opts.cssBefore.left = 0;
    opts.cssBefore.top = 0;
    opts.cssBefore.height = 0;
    opts.animIn.height = 'show';
    opts.animOut.height = 0;
};

// shuffle
$.fn.cycle.transitions.shuffle = function($cont, $slides, opts) {
    var i, w = $cont.css('overflow', 'visible').width();
    $slides.css({left: 0, top: 0});
    opts.before.push(function(curr,next,opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,true,true);
    });
    // only adjust speed once!
    if (!opts.speedAdjusted) {
        opts.speed = opts.speed / 2; // shuffle has 2 transitions
        opts.speedAdjusted = true;
    }
    opts.random = 0;
    opts.shuffle = opts.shuffle || {left:-w, top:15};
    opts.els = [];
    for (i=0; i < $slides.length; i++)
        opts.els.push($slides[i]);

    for (i=0; i < opts.currSlide; i++)
        opts.els.push(opts.els.shift());

    // custom transition fn (hat tip to Benjamin Sterling for this bit of sweetness!)
    opts.fxFn = function(curr, next, opts, cb, fwd) {
        if (opts.rev)
            fwd = !fwd;
        var $el = fwd ? $(curr) : $(next);
        $(next).css(opts.cssBefore);
        var count = opts.slideCount;
        $el.animate(opts.shuffle, opts.speedIn, opts.easeIn, function() {
            var hops = $.fn.cycle.hopsFromLast(opts, fwd);
            for (var k=0; k < hops; k++)
                fwd ? opts.els.push(opts.els.shift()) : opts.els.unshift(opts.els.pop());
            if (fwd) {
                for (var i=0, len=opts.els.length; i < len; i++)
                    $(opts.els[i]).css('z-index', len-i+count);
            }
            else {
                var z = $(curr).css('z-index');
                $el.css('z-index', parseInt(z,10)+1+count);
            }
            $el.animate({left:0, top:0}, opts.speedOut, opts.easeOut, function() {
                $(fwd ? this : curr).hide();
                if (cb) cb();
            });
        });
    };
    $.extend(opts.cssBefore, { display: 'block', opacity: 1, top: 0, left: 0 });
};

// turnUp/Down/Left/Right
$.fn.cycle.transitions.turnUp = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,false);
        opts.cssBefore.top = next.cycleH;
        opts.animIn.height = next.cycleH;
        opts.animOut.width = next.cycleW;
    });
    opts.cssFirst.top = 0;
    opts.cssBefore.left = 0;
    opts.cssBefore.height = 0;
    opts.animIn.top = 0;
    opts.animOut.height = 0;
};
$.fn.cycle.transitions.turnDown = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,false);
        opts.animIn.height = next.cycleH;
        opts.animOut.top   = curr.cycleH;
    });
    opts.cssFirst.top = 0;
    opts.cssBefore.left = 0;
    opts.cssBefore.top = 0;
    opts.cssBefore.height = 0;
    opts.animOut.height = 0;
};
$.fn.cycle.transitions.turnLeft = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,true);
        opts.cssBefore.left = next.cycleW;
        opts.animIn.width = next.cycleW;
    });
    opts.cssBefore.top = 0;
    opts.cssBefore.width = 0;
    opts.animIn.left = 0;
    opts.animOut.width = 0;
};
$.fn.cycle.transitions.turnRight = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,true);
        opts.animIn.width = next.cycleW;
        opts.animOut.left = curr.cycleW;
    });
    $.extend(opts.cssBefore, { top: 0, left: 0, width: 0 });
    opts.animIn.left = 0;
    opts.animOut.width = 0;
};

// zoom
$.fn.cycle.transitions.zoom = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,false,true);
        opts.cssBefore.top = next.cycleH/2;
        opts.cssBefore.left = next.cycleW/2;
        $.extend(opts.animIn, { top: 0, left: 0, width: next.cycleW, height: next.cycleH });
        $.extend(opts.animOut, { width: 0, height: 0, top: curr.cycleH/2, left: curr.cycleW/2 });
    });
    opts.cssFirst.top = 0;
    opts.cssFirst.left = 0;
    opts.cssBefore.width = 0;
    opts.cssBefore.height = 0;
};

// fadeZoom
$.fn.cycle.transitions.fadeZoom = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,false);
        opts.cssBefore.left = next.cycleW/2;
        opts.cssBefore.top = next.cycleH/2;
        $.extend(opts.animIn, { top: 0, left: 0, width: next.cycleW, height: next.cycleH });
    });
    opts.cssBefore.width = 0;
    opts.cssBefore.height = 0;
    opts.animOut.opacity = 0;
};

// blindX
$.fn.cycle.transitions.blindX = function($cont, $slides, opts) {
    var w = $cont.css('overflow','hidden').width();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts);
        opts.animIn.width = next.cycleW;
        opts.animOut.left   = curr.cycleW;
    });
    opts.cssBefore.left = w;
    opts.cssBefore.top = 0;
    opts.animIn.left = 0;
    opts.animOut.left = w;
};
// blindY
$.fn.cycle.transitions.blindY = function($cont, $slides, opts) {
    var h = $cont.css('overflow','hidden').height();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts);
        opts.animIn.height = next.cycleH;
        opts.animOut.top   = curr.cycleH;
    });
    opts.cssBefore.top = h;
    opts.cssBefore.left = 0;
    opts.animIn.top = 0;
    opts.animOut.top = h;
};
// blindZ
$.fn.cycle.transitions.blindZ = function($cont, $slides, opts) {
    var h = $cont.css('overflow','hidden').height();
    var w = $cont.width();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts);
        opts.animIn.height = next.cycleH;
        opts.animOut.top   = curr.cycleH;
    });
    opts.cssBefore.top = h;
    opts.cssBefore.left = w;
    opts.animIn.top = 0;
    opts.animIn.left = 0;
    opts.animOut.top = h;
    opts.animOut.left = w;
};

// growX - grow horizontally from centered 0 width
$.fn.cycle.transitions.growX = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,true);
        opts.cssBefore.left = this.cycleW/2;
        opts.animIn.left = 0;
        opts.animIn.width = this.cycleW;
        opts.animOut.left = 0;
    });
    opts.cssBefore.top = 0;
    opts.cssBefore.width = 0;
};
// growY - grow vertically from centered 0 height
$.fn.cycle.transitions.growY = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,false);
        opts.cssBefore.top = this.cycleH/2;
        opts.animIn.top = 0;
        opts.animIn.height = this.cycleH;
        opts.animOut.top = 0;
    });
    opts.cssBefore.height = 0;
    opts.cssBefore.left = 0;
};

// curtainX - squeeze in both edges horizontally
$.fn.cycle.transitions.curtainX = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,false,true,true);
        opts.cssBefore.left = next.cycleW/2;
        opts.animIn.left = 0;
        opts.animIn.width = this.cycleW;
        opts.animOut.left = curr.cycleW/2;
        opts.animOut.width = 0;
    });
    opts.cssBefore.top = 0;
    opts.cssBefore.width = 0;
};
// curtainY - squeeze in both edges vertically
$.fn.cycle.transitions.curtainY = function($cont, $slides, opts) {
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,false,true);
        opts.cssBefore.top = next.cycleH/2;
        opts.animIn.top = 0;
        opts.animIn.height = next.cycleH;
        opts.animOut.top = curr.cycleH/2;
        opts.animOut.height = 0;
    });
    opts.cssBefore.height = 0;
    opts.cssBefore.left = 0;
};

// cover - curr slide covered by next slide
$.fn.cycle.transitions.cover = function($cont, $slides, opts) {
    var d = opts.direction || 'left';
    var w = $cont.css('overflow','hidden').width();
    var h = $cont.height();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts);
        if (d == 'right')
            opts.cssBefore.left = -w;
        else if (d == 'up')
            opts.cssBefore.top = h;
        else if (d == 'down')
            opts.cssBefore.top = -h;
        else
            opts.cssBefore.left = w;
    });
    opts.animIn.left = 0;
    opts.animIn.top = 0;
    opts.cssBefore.top = 0;
    opts.cssBefore.left = 0;
};

// uncover - curr slide moves off next slide
$.fn.cycle.transitions.uncover = function($cont, $slides, opts) {
    var d = opts.direction || 'left';
    var w = $cont.css('overflow','hidden').width();
    var h = $cont.height();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,true,true);
        if (d == 'right')
            opts.animOut.left = w;
        else if (d == 'up')
            opts.animOut.top = -h;
        else if (d == 'down')
            opts.animOut.top = h;
        else
            opts.animOut.left = -w;
    });
    opts.animIn.left = 0;
    opts.animIn.top = 0;
    opts.cssBefore.top = 0;
    opts.cssBefore.left = 0;
};

// toss - move top slide and fade away
$.fn.cycle.transitions.toss = function($cont, $slides, opts) {
    var w = $cont.css('overflow','visible').width();
    var h = $cont.height();
    opts.before.push(function(curr, next, opts) {
        $.fn.cycle.commonReset(curr,next,opts,true,true,true);
        // provide default toss settings if animOut not provided
        if (!opts.animOut.left && !opts.animOut.top)
            $.extend(opts.animOut, { left: w*2, top: -h/2, opacity: 0 });
        else
            opts.animOut.opacity = 0;
    });
    opts.cssBefore.left = 0;
    opts.cssBefore.top = 0;
    opts.animIn.left = 0;
};

// wipe - clip animation
$.fn.cycle.transitions.wipe = function($cont, $slides, opts) {
    var w = $cont.css('overflow','hidden').width();
    var h = $cont.height();
    opts.cssBefore = opts.cssBefore || {};
    var clip;
    if (opts.clip) {
        if (/l2r/.test(opts.clip))
            clip = 'rect(0px 0px '+h+'px 0px)';
        else if (/r2l/.test(opts.clip))
            clip = 'rect(0px '+w+'px '+h+'px '+w+'px)';
        else if (/t2b/.test(opts.clip))
            clip = 'rect(0px '+w+'px 0px 0px)';
        else if (/b2t/.test(opts.clip))
            clip = 'rect('+h+'px '+w+'px '+h+'px 0px)';
        else if (/zoom/.test(opts.clip)) {
            var top = parseInt(h/2,10);
            var left = parseInt(w/2,10);
            clip = 'rect('+top+'px '+left+'px '+top+'px '+left+'px)';
        }
    }

    opts.cssBefore.clip = opts.cssBefore.clip || clip || 'rect(0px 0px 0px 0px)';

    var d = opts.cssBefore.clip.match(/(\d+)/g);
    var t = parseInt(d[0],10), r = parseInt(d[1],10), b = parseInt(d[2],10), l = parseInt(d[3],10);

    opts.before.push(function(curr, next, opts) {
        if (curr == next) return;
        var $curr = $(curr), $next = $(next);
        $.fn.cycle.commonReset(curr,next,opts,true,true,false);
        opts.cssAfter.display = 'block';

        var step = 1, count = parseInt((opts.speedIn / 13),10) - 1;
        (function f() {
            var tt = t ? t - parseInt(step * (t/count),10) : 0;
            var ll = l ? l - parseInt(step * (l/count),10) : 0;
            var bb = b < h ? b + parseInt(step * ((h-b)/count || 1),10) : h;
            var rr = r < w ? r + parseInt(step * ((w-r)/count || 1),10) : w;
            $next.css({ clip: 'rect('+tt+'px '+rr+'px '+bb+'px '+ll+'px)' });
            (step++ <= count) ? setTimeout(f, 13) : $curr.css('display', 'none');
        })();
    });
    $.extend(opts.cssBefore, { display: 'block', opacity: 1, top: 0, left: 0 });
    opts.animIn       = { left: 0 };
    opts.animOut   = { left: 0 };
};



})(jQuery);