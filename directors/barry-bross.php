<?php
include '../menu.class.php';
$menu = new Menu("menu");
$super_menu = new Menu("super_menu");
$social = new Menu("social");
$menu->css_class ="0";
$menu->css_id ="0";
$menu->special ="Special";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Director: Barry Bross</title>
<meta name="description" content="Digital Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
<script src="/js/modernizr.2.0.6.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/ac_quicktime.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/qtp_library.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include '../_header.php'; ?>
    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">DIRECTORS</h3>
        <div class="container directors">
            <div class="panel-default" data-toggle="collapse">
                <div class="panel-heading">
                    <h3 class="panel-title" style="margin-left:5px;">Barry Bross</h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                </div>
                </div>
            </div>            
            <div class="wt-gallery">
                <div class="main-screen">
                    <img class="click-to-play" src="/_img/click-to-play.png" alt="click to play" title="click to play">
                    <a href="#"><img id="main-img" src="/images/case-study.jpg" alt="placeholder"/></a>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                    <div class="preloader"><img src="/assets/loader.gif" alt="spiny thing"/></div>
                </div>
                <div class="c-panel">
                    <div id="thumbs-back"><img src="/assets/prev_thumb.png" alt="back button"/></div>
                    <div class="thumbnails">
                        <ul>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/kmart.jpg">
                                    <img src="/directors/images/kmart.jpg" alt="Kmart"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Kmart</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/thq.jpg">
                                    <img src="/directors/images/thq.jpg" alt="THQ Video Game"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>THQ Video Game</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/wowwee.jpg">
                                    <img src="/directors/images/wowwee.jpg" alt="WowWee International"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>WowWee International</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/mania-few-good-men.jpg">
                                    <img src="/directors/images/mania-few-good-men.jpg" alt="A Few Good Men Parody"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>A Few Good Men Parody</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/mania-basic-instinct.jpg">
                                    <img src="/directors/images/mania-basic-instinct.jpg" alt="Basic Instinct Parody"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Basic Instinct Parody</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/mania-gladiator.jpg">
                                    <img src="/directors/images/mania-gladiator.jpg" alt="Gladiator Parody"/></a>
                                </div>
                                <a href="#six"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Gladiator Parody</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div id="thumbs-fwd"><img src="/assets/next_thumb.png" alt="Next Thumb"/></div> 
                    <div class="pagination"></div>
                </div>
            </div>
            <div id="one" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/kmart/kmart.mp4" type="video/mp4">
                  <source src="/videos/kmart/kmart.ogg" type="video/ogg">
                  <source src="/videos/kmart/kmart.webm" type="video/webm">
                </video> 
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/thq/thq-video-game.mp4" type="video/mp4">
                  <source src="/videos/thq/thq-video-game.ogg" type="video/ogg">
                  <source src="/videos/thq/thq-video-game.webm" type="video/webm">
                </video> 
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/wowwee/wowwee.mp4" type="video/mp4">
                  <source src="/videos/wowwee/wowwee.ogg" type="video/ogg">
                  <source src="/videos/wowwee/wowwee.webm" type="video/webm">
                </video> 
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/mania-few-good-men/a-few-good-men-parody.mp4" type="video/mp4">
                  <source src="/videos/mania-few-good-men/a-few-good-men-parody.ogg" type="video/ogg">
                  <source src="/videos/mania-few-good-mena-few-good-men-parody.webm" type="video/webm">
                </video> 
            </div>
            <div id="five" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/mania-basic-instinct/basic-instinct-parody.mp4" type="video/mp4">
                  <source src="/videos/mania-basic-instinct/basic-instinct-parody.ogg" type="video/ogg">
                  <source src="/videos/mania-basic-instinct/basic-instinct-parody.webm" type="video/webm">
                </video> 
            </div>
            <div id="six" class="modal">
                <a class="close" href="">close</a>
                <video width="640" height="364" height="364" controls>
                  <source src="/videos/mania-gladiator/gladiator-parody.mp4" type="video/mp4">
                  <source src="/videos/mania-gladiator/gladiator-parody.ogg" type="video/ogg">
                  <source src="/videos/mania-gladiator/gladiator-parody.webm" type="video/webm">
                </video> 
            </div>
        </div>
    </div>
    <div class="modal-backdrop"></div>
    <footer>
        <ul class="copyright vcard">
            <li class="cr">Copyright</li>
            <li class="org">Manhattan Place Entertainment.  All Rights Reserved.</li>
            <li class="tel">Phone: 212-682-2000</li>  
            <li>Fax: 212-682-2058</li>
            <li><a href="/Manhattan_Place.vcf">Download vCard </a></li>
            <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
                <a href="/tos.pdf">Click here for PDF</a>
            </li>
        </ul>
    </footer>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17516374-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script src="/js/jquery-1.7.1.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>