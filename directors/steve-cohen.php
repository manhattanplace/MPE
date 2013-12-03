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
<title>Director: Steve Cohen</title>
<meta name="description" content="Digital Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="../_css/main.css" media="screen"/>
<script src="../js/modernizr.2.0.6.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/ac_quicktime.js"></script>
<script src="http://www.apple.com/library/quicktime/scripts/qtp_library.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <nav>
            <ul class="menu-social">
                <?php $social->makeMenu(); ?>
            </ul>
            <ul class="menu-info">
                <?php $super_menu->makeMenu(); ?>
            </ul>        
            <ul class="menu-main">
                <?php $menu->makeMenu(); ?>
            </ul>
        </nav>
    </header>
    <div class="panel">
        <div id="logo">
            <a href="../index.html"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">DIRECTORS</h3>
        <div class="container directors">
            <div class="panel-default" data-toggle="collapse">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                    <span class="plus-minus"></span> Steve Cohen Bio
                    </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                    <p>In his professional career Steve Cohen has successfully worn almost every hat imaginable in video, television, and commercial production.</p>
                    <p>A five time Emmy Award winner, Steve has been the recipient of dozens of other industry awards including the Promax , Tellys, Cine Eagles and more.</p>
                    <p>In 1982 Steve helped establish NBA Entertainment's reputation as a top production entity and in 1985 was nominated for his first (and NBAE's first) Sports Emmy award for producing and editing a profile about Magic Johnson.</p>
                    <p>From that point, he spent the next 12 years conquering New York's live television market and worked in a DGA capacity as an associate director, floor director, and director on literally thousands of live telecasts.  Working at the three major networks and virtually every local station in the New York metropolitan area, he received 5 Emmy awards and  7 other nominations during that time.  Some of his credits included The NFL Today, The Olympic Games, The CBS Evening News with Dan Rather, Late Night with David Letterman,  Good Morning America, and local telecasts of every professional New York sports team including the New York Yankees, The New York Mets, The New York Knicks, and the New York Rangers.</p>
                </div>
                </div>
            </div>            
            <div class="wt-gallery">
                <div class="main-screen">
                    <img class="click-to-play" src="../_img/click-to-play.png" alt="click to play" title="click to play">
                    <a href="#"><img id="main-img" src="../images/case-study.jpg" alt="placeholder"/></a>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                    <div class="preloader"><img src="../assets/loader.gif" alt="spiny thing"/></div>
                </div>
                <div class="c-panel">
                    <div id="thumbs-back"><img src="../assets/prev_thumb.png" alt="back button"/></div>
                    <div class="thumbnails">
                        <ul>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/brian-cranston.jpg">
                                    <img src="../directors/images/brian-cranston.jpg" alt="Brian Cranston - Cure PC"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Cure PC - Bryan Cranston</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/dennis-leary.jpg">
                                    <img src="../directors/images/dennis-leary.jpg" alt="Dennis Leary"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd> Cure PC - Denis Leary</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/dan-patrick.jpg">
                                    <img src="../directors/images/dan-patrick.jpg" alt="Dan Patrick"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>The Dan Patrick Show - "Fritzy"</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/anderson-cooper.jpg">
                                    <img src="../directors/images/anderson-cooper.jpg" alt="Backstage with Anderson Cooper"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Backstage with Anderson Cooper </dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/50cent.jpg">
                                    <img src="../directors/images/50cent.jpg" alt="50 Cent"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>Baby By Me</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/atlantic-city.jpg">
                                    <img src="../directors/images/atlantic-city.jpg" alt="AC Lights Up The Boardwalk"/></a>
                                </div>
                                <a href="#six"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                        <dd>AC Lights Up The Boardwalk</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/a-75-year-legacy.jpg">
                                    <img src="../directors/images/a-75-year-legacy.jpg" alt="A 75 Year Legacy"/></a>
                                </div>
                                <a href="#seven"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt> 
                                        <dd>"A 75 Year Legacy"</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/pooch.jpg">
                                    <img src="../directors/images/pooch.jpg" alt="ESPN SportsCenter Spot"/></a>
                                </div>
                                <a href="#eight"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                        <dd>ESPN "SportsCenter Spot"</dd>
                                </dl>
                            </li>
                            
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/giants-rewind.jpg">
                                    <img src="../directors/images/giants-rewind.jpg" alt="Giants Rewind"/></a>
                                </div>
                                <a href="#nine"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>"Giants Rewind"</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/al-trautwig.jpg">
                                    <img src="../directors/images/al-trautwig.jpg" alt="Al Trautwig"/></a>
                                </div>
                                <a href="#ten"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                        <dd>Al Trautwig "Whatever He Wants"</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/hockey-night-live.jpg">
                                    <img src="../directors/images/hockey-night-live.jpg" alt="Hockey Night Live"/></a>
                                </div>
                                <a href="#eleven"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                        <dd>Hockey Night Live</dd> 
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div id="thumbs-fwd"><img src="../assets/next_thumb.png" alt="Next Thumb"/></div> 
                    <div class="pagination"></div>
                </div>
            </div>
            <div id="one" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/curePC/cranston.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/lustgarten-foundation-psa/lustgarten-foundation-psa.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/dan-patrick/dan-patrick.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/anderson-cooper/anderson-cooper.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="five" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/50cent/50cent.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="six" class="modal">
                <a class="close" href="">close</a>
               <script>QT_WriteOBJECT('../videos/ac-lightup-boardwalk/ac-lightup-boardwalk.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="seven" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/rangers-75th/rangers_75th.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eight" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/espn-camp-canine-groovin/espn-camp-canine-groovin.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="nine" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/giants-rewind/papa.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="ten" class="modal">
                <a class="close" href="">close</a>
                <video  controls>
                   <script>QT_WriteOBJECT('../videos/whatever-he-wants/Control_room.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eleven" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('../videos/hnl01/hnl01.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
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
            <li><a href="../Manhattan_Place.vcf">Download vCard </a></li>
            <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
                <a href="../tos.pdf">Click here for PDF</a>
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
<script src="../js/jquery-1.7.1.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>