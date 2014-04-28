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
<title>Director: Avi Cohen</title>
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
    <?php include '../_header.php'; ?>
    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">DIRECTORS</h3>
        <div class="container directors">
    		<div class="back_button1">
    			<a href="/directors.php">&laquo; Back to Directors</a>
    		</div>
            <div class="panel-default" data-toggle="collapse">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                    <span class="plus-minus"></span> Avi Cohen - Director/DP Bio
                    </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                    <p>From humble beginnings comes great achievement... </p>
                    <p>Avi's distinct visual style is borne from his intimate relationship with the lens. Visceral movements, dynamic sequences, bold asthetic. Every shot tells a story. Recent clients include ESPN, Doritos, DC Shoes, DGK, Casio, Rage Against the Machine, Forgiato, and Brammo.</p>
                    <p>Avi began his film career in the school of hard knocks by leaping into the world of doc-cinema, venturing where other directors could not or would not go. He built a reputation by capturing amazing moments in time and now he's made a career of creating them.</p>
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
                                    <a class="gallery_overlay" href="/directors/images/doritos.jpg">
                                    <img src="/directors/images/doritos.jpg" alt="Doritos - House Rules"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Doritos - House Rules</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/goosha.jpg">
                                    <img src="/directors/images/goosha.jpg" alt="Goosha - Round Run"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd> Goosha - Round Run</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/forgiato-grill.jpg">
                                    <img src="/directors/images/forgiato-grill.jpg" alt="Forgiato - Grill"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>Forgiato - Grill</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/forgiato-desire.jpg">
                                    <img src="/directors/images/forgiato-desire.jpg" alt="Forgiato - Desire"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Forgiato - Desire </dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/casio.jpg">
                                    <img src="/directors/images/casio.jpg" alt="Casio"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Casio</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/forgiato-freedom.jpg">
                                    <img src="/directors/images/forgiato-freedom.jpg" alt="Forgiato - A Push Towards Freedom"/></a>
                                </div>
                                <a href="#six"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Forgiato - A Push Towards Freedom</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div id="thumbs-fwd"><img src="/assets/next_thumb.png" alt="Next Thumb"/></div> 
                    <div class="pagination"></div>
                </div>
            </div>
            <div id="one" class="modal" data-video="/videos/doritos/doritos.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/doritos/doritos.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="two" class="modal" data-video="/videos/doritos/goosha-round-run.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/goosha-round-run/goosha-round-run.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="three" class="modal" data-video="/videos/doritos/forgiato-grill.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/forgiato-grill/forgiato-grill.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="four" class="modal" data-video="/videos/doritos/forgiato-desire.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/forgiato-desire/forgiato-desire.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="five" class="modal" data-video="/videos/doritos/casio.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/casio/casio.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="six" class="modal" data-video="/videos/doritos/forgiato-freedom.mov">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/forgiato-freedom/forgiato-freedom.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
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