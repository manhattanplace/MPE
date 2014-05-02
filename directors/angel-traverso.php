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
<title>Director: Angel Traverso</title>
<meta name="description" content="Digital Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="/js/modernizr.2.0.6.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/ac_quicktime.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/qtp_library.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include '../_header.php'; ?>    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">DIRECTORS</h3>
        <div class="container directors" data-url="/directors/angel-traverso.php">
    		<div class="back_button1">
    			<a href="/directors.php">&laquo; Back to Directors</a>
    		</div>
            <div class="panel-default" data-toggle="collapse">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                    <!-- <span class="plus-minus"></span> --> Angel Traverso <!-- - Director Bio -->
                    </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                    <p></p>
                    <p></p>
                    <p></p>
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
                <div class="c-panel joe">
                    <div id="thumbs-back"><img src="/assets/prev_thumb.png" alt="back button"/></div>
                    <div class="thumbnails">
                        <ul>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images" data-video="/directors/angel-traverso/trip-advisor.php">
                                    <a class="gallery_overlay" href="/directors/images/trip-advisor.jpg">
                                    <img src="/directors/images/trip-advisor.jpg" alt="Trip Advisor"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Trip Advisor</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images" data-video="/directors/angel-traverso/walgreens.php">
                                    <a class="gallery_overlay" href="/directors/images/walgreens.jpg">
                                    <img src="/directors/images/walgreens.jpg" alt="Walgreens"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Walgreens</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images" data-video="/directors/angel-traverso/leche-fresca.php">
                                    <a class="gallery_overlay" href="/directors/images/leche-fresca.jpg">
                                    <img src="/directors/images/leche-fresca.jpg" alt="Leche Fresca"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>Leche Fresca</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images" data-video="/directors/angel-traverso/primera-hora.php">
                                    <a class="gallery_overlay" href="/directors/images/primera-hora.jpg">
                                    <img src="/directors/images/primera-hora.jpg" alt="Primera Hora"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Primera Hora</dd>
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
                <script>QT_WriteOBJECT('/videos/trip-advisor/trip-advisor.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/walgreens/walgreens.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/leche-fresca/leche-fresca.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/primera-hora/primera-hora.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
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