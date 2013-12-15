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
<title>Director: Joe Chapura</title>
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
        <div class="container directors">
    		<div class="back_button1">
    			<a href="/directors.php">&laquo; Back to Directors</a>
    		</div>
            <div class="panel-default" data-toggle="collapse">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                    <span class="plus-minus"></span> Joe Chapura - Director/DP Bio
                    </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                    <p>Joe Chapura is a graduate of Emerson College in Boston, where he studied film and television production. After graduation, he was hired by Metromedia to produce a 39 episode season of a late-night, half-hour show called Nightshift, which won a Golden Mic Award for “Best Experimental Series.”
He then became the Executive Producer for the seminal Spotwise Agency, one of the pioneer companies to develop, write, and produce image campaigns for Broadcast and Cable Networks and shows. It is here he launched his directing career, filming work for ABC Sports, Showtime, and Disney, picking up many awards including two National Emmys.</p>
                    <p>The next logical step for a short-form director is TV Commercial work, and Chapura directed diverse work for respected Boston Ad Agencies like Arnold, Hill Holiday, and Mullen. This work peaked the interest of New York City production companies, and he moved South to take advantage of the World’s biggest Media Market.</p>
                    <p>In the years that followed, hundreds of Commercials were shot for numerous Agencies representing clients like Coke, Pepsi, Minolta, and Gatorade. Two Super Bowl commercials, for Publishers Clearing House, and World Wrestling Entertainment, brought much media attention to the director, who was named by Creativity Magazine as one of 5 top comedy directors in a cover -story feature, including photo spread and interview.</p>
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
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/sinupret.jpg">
                                    <img src="/directors/images/sinupret.jpg" alt="Sinupret"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Sinupret</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/sprite-24.jpg">
                                    <img src="/directors/images/sprite-24.jpg" alt="Sprite 24 hours to do your thing"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Sprite 24 hours to do your thing</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/sprite-hospital.jpg">
                                    <img src="/directors/images/sprite-hospital.jpg" alt="Sprite Hospital"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>Sprite Hospital</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/kozmo.jpg">
                                    <img src="/directors/images/kozmo.jpg" alt="Kozmo"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Kozmo</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/directors/images/cheerleader.jpg">
                                    <img src="/directors/images/cheerleader.jpg" alt="Cheerleader"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Cheerleader</dd>
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
                <script>QT_WriteOBJECT('/videos/sinupret/sinupret.mov', '640', '480', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/sprite-24/sprite-24.mov', '640', '480', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/sprite-hospital/sprite-hospital.mov', '640', '480', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/kozmo/kozmo.mov', '640', '480', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
            </div>
            <div id="five" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/cheerleader/cheerleader.mov', '640', '480', '', 'AUTOPLAY', 'True', 'SCALE', 'TOFIT');</script>
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