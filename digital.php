<?php
include 'menu.class.php';
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
<title>Digital and Web Video Library</title>
<meta name="description" content="Digital Video Library">
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include '_header.php'; ?>
<div class="panel">
    <div id="logo">
        <a href="index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
    </div>
    <h3 class="library">Digital and Web</h3>
    <div class="container">
        <div class="wt-gallery">
            <div class="main-screen">
                <img id="bg-img" src="assets/spacer.png" alt="spacer"/>
                <a href="#"><img id="main-img" src="images/case-study.jpg" alt="placeholder"/></a>
                <img src="assets/prev.png" id="prev-btn" alt="back button"/>
                <img src="assets/next.png" id="next-btn" alt="forward button"/>
                <dl class="desc"></dl>
                <div class="tmp-desc"></div>
                <div class="info-pane">--&nbsp;/&nbsp;--</div>
                <div class="preloader"><img src="assets/loader.gif" alt="spiny thing"/></div>
            </div>                
            <div class="c-panel">
                <div id="thumbs-back"><img src="assets/prev_thumb.png" alt="back button"/></div>
                <div class="thumbnails">
                    <ul>
                        <!-- case study -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-beyonce.jpg"></a>
                                <img src="images/thumbs/case-study-beyonce.jpg" alt="Beyonce"/>
                            </div>
                            <a href="digital/beyonce-4/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>BEYONCE "4"</dd>
                                <dt class="description">AGENCY:</dt>
                                    <dd> Weiden + Kennedy</dd>
                                <dt class="description">PRODUCTION COMPANY:</dt>
                                    <dd> PrettyBird</dd>
                                <dt class="description">DIRECTOR:</dt>
                                    <dd> Melina Matsoukas</dd>
                                <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                    <dd> Jim Fealy</dd>
                                <dt class="description">2ND CAMERA OPERATOR:</dt>
                                    <dd> Steve Cohen</dd>
                            </dl>
                        </li>
                        <!-- case study -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case_study_50cent.jpg"></a>
                                <img src="images/thumbs/case_study_50cent.jpg" alt="50 Cent at mic"/>
                            </div>
                            <a href="digital/50cent/50cent.php"></a>
                            <dl>
                                <dt class="description">TITLE:</dt>
                                    <dd> Baby By Me</dd>
                                <dt class="description">CLIENT:</dt>
                                    <dd> Glaceau</dd>
                                <dt class="description">DIRECTOR:</dt>
                                    <dd> Steve Cohen</dd>
                                <dt class="description">DP:</dt>
                                    <dd> Steve Cohen</dd>
                                <dt class="description">CREATIVE DIRECTOR:</dt>
                                    <dd> Sue Kim</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-ac.jpg">
                                </a><img src="images/thumbs/case-study-ac.jpg" alt=""/>
                            </div>
                            <a href="digital/ac-lightup-boardwalk/video.php"></a>
                            <dl>
                                <dt class="description">TITLE:</dt>
                                    <dd>AC Lights Up The Boardwalk</dd>
                                <dt class="description">AGENCY:</dt>
                                    <dd>Euro RSCG</dd>
                                <dt class="description">DIRECTOR:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Director of Photography:</dt>
                                    <dd> Steve Cohen</dd>
                                <dt class="description">Camera Operators:</dt>
                                    <dd>Bob Hanna, Kenny Chow, Andrew Tomayko, Jason Letkiewicz</dd>
                                <dt class="description">Production COMPANY:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/digital/big-east.jpg"></a>
                                <img src="images/digital/big-east-thumb.jpg" alt="Big East Tourney Tip-off in Grand Central"/>
                            </div>
                            <a href="digital/big-east-final/video.php"></a>
                            <dl>
                                <dt class="description">TITLE:</dt>
                                    <dd>Big East Tourney Tip-off in Grand Central</dd>
                                <dt class="description">FOR FOX SPORTS 1:</dt>
                                    <dd>Robert Gotleig-EVP Fox Sports Marketing</dd>
                                    <dd>Bill Battin-SVP Fox Sports</dd>
                                <dt class="description">DIRECTOR:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Camera Operators:</dt>
                                    <dd>Chris Bierlein, Axel Baumann, Tom Rome</dd>
                                <dt class="description">Production Company/Post Production:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                                    <dd>2014 Sports Clio Award Winner</dd>
                            </dl>
                        </li> 
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-kohls.jpg"></a>
                                <img src="images/thumbs/case-study-kohls.jpg" alt="Kohl's - Rock & Republic"/>
                            </div>
                            <a href="digital/kohls/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Kohl's - Rock &amp; Republic</dd>
                                        <dd>"Fashion Show"</dd>
                                <dt class="description">Client:</dt>
                                    <dd> Glam Media</dd>
                                <dt class="description">EXECUTIVE PRODUCER:</dt>
                                    <dd>Robert McConnell</dd>
                                <dt class="description">PROJECT MANAGER:</dt>
                                    <dd>Sarah Bogen</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Chris Bierlein</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/digital/glam-ebay.jpg"></a>
                                <img src="images/digital/glam-ebay-thumb.jpg" alt="Glam - Ebay">
                            </div>
                            <a href="digital/escape-to-nyc/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Glam - Ford</dd>
                                <dt class="description">AGENCY:</dt>
                                    <dd>Glam</dd>
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Bob Santerlase</dd>
                                <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                    <dd>Dik Yazedjian</dd>
                                <dt class="description">2ND CAMERA OPERATOR:</dt>
                                    <dd>Andrew Tomayko</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                                <dt class="description">POST PRODUCTION:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-hero-of-the-rails.jpg">
                                <img src="images/thumbs/case-study-hero-of-the-rails.jpg" alt="Hero of the Rails"/></a>
                            </div>
                            <a href="digital/hotr/hotr.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Hero Of The Rails</dd>
                                <dt class="description">Client:</dt>
                                    <dd>HIT Entertainment</dd>
                                <dt class="description">PRODUCER/DIRECTOR:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">EDITOR:</dt>
                                    <dd> Jonathan Wendell</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-cruise.jpg"></a>
                                <img src="images/thumbs/case-study-cruise.jpg" alt="Celebrity Cruise Lines"/>
                            </div>
                            <a href="digital/cruise/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Celebrity Cruise Lines</dd>
                                <dt class="description">CLIENT:</dt>
                                    <dd>Concentric Communications</dd>
                                <dt class="description">DP/DIRECTOR:</dt>
                                    <dd> Guy Jackson</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-nyscf.jpg"></a>
                                <img src="images/thumbs/case-study-nyscf.jpg" alt="New York Stem Cell Foundation"/>
                            </div>
                            <a href="digital/nyscf/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>A Bridge To Cures</dd>
                                <dt class="description">CLIENT:</dt>
                                    <dd>New York Stem Cell Foundation</dd>
                                <dt class="description">PRODUCERS:</dt>
                                    <dd>Chris Todd <span style="text-transform:none;">and</span> Steve Cohen</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">EDITOR:</dt>
                                    <dd>Doug Spitzer</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-wgc-a.jpg"></a>
                                <img src="images/thumbs/case-study-wgc-a.jpg" alt="World Gold Council"/>
                            </div>
                            <a href="digital/amsale/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>"Gold Makes <span style="text-transform:none;">it a</span> Marriage" </dd>
                                    <dd>-  Amsale Abera</dd>
                                <dt class="description">Client:</dt>
                                    <dd>World Gold Council/The Creative Group</dd>
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Dean Crago</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                         <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-rock-makeover.jpg"></a>
                                <img src="images/thumbs/case-study-rock-makeover.jpg" alt="Kohl's - Rock & Republic"/>
                            </div>
                            <a href="digital/kohls-rock-republic/video.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Kohl's - Rock &amp; Republic</dd>
                                    <dd>"Make-Overs"</dd>
                                <dt class="description">CLIENT:</dt>
                                    <dd>Glam Media</dd> 
                                <dt class="description">EXECUTIVE PRODUCER:</dt>
                                    <dd>Robert McConnell</dd>
                                <dt class="description">PROJECT MANAGER:</dt>
                                    <dd>Sarah Bogen</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Chris Bierlein</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>      
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-dress-barn.jpg"></a>
                                <img src="images/thumbs/case-study-dress-barn.jpg" alt="Dress Barn Style Squad"/>
                            </div>
                            <a href="digital/dress-barn/video.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Dress Barn "Style Squad"</dd>
                                <dt class="description">CLIENT:</dt>
                                    <dd>The Creative Group</dd>
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Dean Crago</dd>
                                <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">2ND CAMERA OPERATOR:</dt>
                                    <dd>Steve Cohen</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-makeover.jpg">
                                <img src="images/thumbs/case-study-makeover.jpg" alt="Kohl's - 'Spring Trends'"/></a>
                            </div>
                            <a href="digital/kohls-spring-trends/video.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Kohl's - "Spring Trends"</dd> 
                                <dt class="description">CLIENT:</dt>
                                    <dd>Glam Media</dd> 
                                <dt class="description">EXECUTIVE PRODUCER:</dt>
                                    <dd>Robert McConnell</dd>
                                <dt class="description">PROJECT MANAGER:</dt>
                                    <dd>Sarah Bogen</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Chris Bierlein</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-misty-island-rescue.jpg"></a>
                                <img src="images/thumbs/case-study-misty-island-rescue.jpg" alt="Misty Island Rescue"/>
                            </div>
                            <a href="digital/misty-island-rescue/misty-island-rescue.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Misty Island Rescue</dd>
                                <dt class="description">Client:</dt>
                                    <dd>HIT Entertainment</dd>
                                <dt class="description">PRODUCER/DIRECTOR:</dt><dd> Steve Cohen</dd>
                                <dt class="description">EDITOR:</dt>
                                    <dd>Jonathan Wendell</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-sheri.jpg"></a>
                                <img src="images/thumbs/case-study-sheri.jpg" alt="Oral B Power Moment"/>
                            </div>
                            <a href="digital/sherri-oral-b/video-sherri.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Oral B "Power Moment" - Holiday</dd> 
                                <dt class="description">CLIENT:</dt>
                                    <dd> Creative Group</dd> 
                                <dt class="description">Director of Photography:</dt>
                                    <dd> Steve Cohen</dd>
                                <dt class="description">Producer:</dt>
                                    <dd> Dean Crago</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>      
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-sheri-1.jpg"></a>
                                <img src="images/thumbs/case-study-sheri-1.jpg" alt="Oral B Power Moment"/>
                            </div>
                            <a href="digital/sherri-new/video-sherri.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>Oral B "Power Moment"</dd> 
                                <dt class="description">CLIENT:</dt>
                                    <dd> Creative Group</dd> 
                                <dt class="description">Director of Photography:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Producer:</dt>
                                    <dd>Dean Crago</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-GLAM.jpg"></a>
                                <img src="images/thumbs/case-study-GLAM.jpg" alt="Three Moms"/>
                            </div>
                            <a href="digital/glam-smart-moms-connect/glam-video.php"></a>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd> Smart Moms Connect</dd> 
                                <dt class="description">CLIENT:</dt>
                                    <dd> Glam Media</dd> 
                                <dt class="description">EXECUTIVE PRODUCER:</dt>
                                    <dd>Robert McConnell</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-wgc-b2.jpg"></a>
                                <img src="images/thumbs/case-study-wgc-b2.jpg" alt="Amsale Abera"/>
                            </div>
                            <a href="digital/wgc-02/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>"Why is gold the preferred metal for wedding day jewelry?"</dd>
                                    <dd>-  Amsale Abera</dd>
                                <dt class="description">Client:</dt>
                                    <dd>World Gold Council/The Creative Group</dd>
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Dean Crago</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-wgc-a2.jpg"></a>
                                <img src="images/thumbs/case-study-wgc-a2.jpg" alt="Amsale Abera"/>
                            </div>
                            <a href="digital/wgc-03/video.php"></a> 
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>"Why is gold the preferred metal for wedding day jewelry"</dd>
                                    <dd>-  Amsale Abera</dd>
                                <dt class="description">Client:</dt>
                                    <dd> World Gold Council/The Creative Group</dd>
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Dean Crago</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd> Steve Cohen</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                        <!-- case study  -->
                        <li>
                            <div class="gallery-images">
                                <a class="gallery_overlay" href="images/case-study-python.jpg"></a>
                                <img src="images/thumbs/case-study-python.jpg" alt="Monty Python"/>
                            </div>
                            <dl>
                                <dt class="description">Title:</dt>
                                    <dd>The Monty Python Reunion</dd> 
                                <dt class="description">CLIENT:</dt>
                                    <dd>IFC</dd> 
                                <dt class="description">PRODUCER:</dt>
                                    <dd>Colin Moore</dd>
                                <dt class="description">DIRECTOR/DP:</dt>
                                    <dd>Steve Cohen</dd>
                                <dt class="description">Production Services:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="Next Thumb"/></div> 
            <div class="pagination"></div>
        </div>
        </div>
    </div>
</div>
<footer>
    <ul class="copyright vcard">
        <li class="cr">Copyright</li>
        <li class="org">Manhattan Place Entertainment.  All Rights Reserved.</li>
        <li class="tel">Phone: 212-682-2000</li>  
        <li>Fax: 212-682-2058</li>
        <li><a href="Manhattan_Place.vcf">Download vCard </a></li>
        <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp;
            <a href="tos.pdf">Click here for PDF</a>
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
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>