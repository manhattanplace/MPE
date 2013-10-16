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
			var $desc = $("div.desc", $obj);
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
				var desc = thumb.find(">p").html();
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
							"padding-bottom":$mainImg.css("padding-bottom"),								  							  					"padding-left":$mainImg.css("padding-left"), 
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