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
<title>Director: Evan Langely Laffin</title>
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
                    <span class="plus-minus"></span> Evan Langely Laffin Bio
                    </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse in" style="height: auto;" data-target="collapse" style="display:none;">
                <div class="panel-body">
                    <p>Visionary Director/Visual Effects Supervisor</p>
                    <p>With a strong background in visual effects, Evan has a wide range of experience leading creative teams. Starting off as a commercial artist, Evan gained recognition at major studios including the Mill and Digital Domain, eventually moving from commercials to feature films.</p>
                    <p>Following his work on Oblivion, Evan has worked internationally, both directing and supervising visual effects for major commercial projects. His body of work includes commercials for Disney, DreamWorks Animation, Toyota, Volkswagen, Activision, and many others.</p>
                    <p>Recently nominated for a VMA, Evan is pursuing further experience in commercial directing and visual effects supervision.</p>
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
                                    <a class="gallery_overlay" href="../directors/images/oblivion.jpg">
                                    <img src="../directors/images/oblivion.jpg" alt="Oblivion Trailer"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Oblivion Trailer</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/toyota.jpg">
                                    <img src="../directors/images/toyota.jpg" alt="Toyota"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Toyota</dd> 
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="../directors/images/call-of-duty.jpg">
                                    <img src="../directors/images/call-of-duty.jpg" alt="Call of Duty"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                        <dd>Call of Duty</dd> 
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
                <video width="640" controls>
                  <source src="../videos/oblivion/oblivion.mp4" type="video/mp4">
                  <source src="../videos/oblivion/oblivion.ogg" type="video/ogg">
                  <source src="../videos/oblivion/oblivion.webm" type="video/webm">
                </video> 
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <video width="640" controls>
                  <source src="../videos/toyota/toyota.mp4" type="video/mp4">
                  <source src="../videos/toyota/toyota.ogg" type="video/ogg">
                  <source src="../videos/toyota/toyota.webm" type="video/webm">
                </video> 
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <video width="640" controls>
                  <source src="../videos/call-of-duty/call-of-duty.mp4" type="video/mp4">
                  <source src="../videos/call-of-duty/call-of-duty.ogg" type="video/ogg">
                  <source src="../videos/call-of-duty/call-of-duty.webm" type="video/webm">
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