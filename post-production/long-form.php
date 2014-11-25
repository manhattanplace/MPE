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
<title>Post Production: Long Form</title>
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
<body class="post-production">
<?php include '../_header.php'; ?>    <div class="panel">
        <div id="logo">
            <a href="/index.php"><h1>Manhattan Place Entertainment - Video and Film Production Services</h1></a>
        </div>
        <h3 class="library">POST PRODUCTION</h3>
        <h3 class="library sub-section">Long Form</h3>
        <div class="container directors" data-url="/post-production/short-form.php">
    		<div class="back_button1">
    			<a href="/post-production.php">&laquo; Back to Post Production</a>
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
                                    <a class="gallery_overlay" href="/post-production/images/dark-light.jpg">
                                    <img src="/post-production/images/dark-light.jpg" alt="Dark Light"/></a>
                                </div>
                                <a href="#one"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Dark Light</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>HBO</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/herschel-trailer.jpg">
                                    <img src="/post-production/images/herschel-trailer.jpg" alt="Herschel"/></a>
                                </div>
                                <a href="#two"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Herschel</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>ESPN</dd>
                                    <dt class="description">Editor</dt>
                                    <dd>Jonathan Wendell</dd> 
                                </dl>
                            </li>      
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/sandra-day-oconnor.jpg">
                                    <img src="/post-production/images/sandra-day-oconnor.jpg" alt="Portraits of a Lady"/></a>
                                </div>
                                <a href="#four"></a> 
                                <dl>
                                    <dt class="description">Title:</dt>
                                    <dd>Portraits of a Lady</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>HBO</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/jordans.jpg">
                                    <img src="/post-production/images/jordans.jpg" alt="Heir Jordan's"/></a>
                                </div>
                                <a href="#five"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Heir Jordan's</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>No Regrets Entertainment</dd>
                                    <dt class="description">Editor: </dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/big-east.jpg">
                                    <img src="/post-production/images/big-east.jpg" alt="BIG EAST Tourney Tip-Off in Grand Central"/></a>
                                </div>
                                <a href="#ten"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>BIG EAST Tourney Tip-Off in Grand Central</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>FS1</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Joe Ward</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>David Lengel</dd>
                                    <dd class="clio">2014 Sports Clio Award Winner</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li class="image-only">
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/whos-number-one.jpg">
                                    <img src="/post-production/images/whos-number-one.jpg" alt="Who's Number 1?"/></a>
                                </div>
                                <a href="#three"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Who's Number 1?</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Redline</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/kohls-rock-republic.jpg">
                                    <img src="/post-production/images/kohls-rock-republic.jpg" alt="Kohl's Rock &amp; Republic Fashion Show"/></a>
                                </div>
                                <a href="#eleven"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Kohl's Rock &amp; Republic Fashion Show</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Glam Media</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Dean Marcial</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/knicks-open-2012.jpg">
                                    <img src="/post-production/images/knicks-open-2012.jpg" alt="New York Knicks Open 2012"/></a>
                                </div>
                                <a href="#seventeen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>New York Knicks Open 2012</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>The New York Knicks</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                </dl>
                            </li>    
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/kohls-spring-trends.jpg">
                                    <img src="/post-production/images/kohls-spring-trends.jpg" alt="Kohl's Spring Trends"/></a>
                                </div>
                                <a href="#fifteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Kohl's Spring Trends</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Glam Media</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jay Sprogell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/ford.jpg">
                                    <img src="/post-production/images/ford.jpg" alt="Ford"/></a>
                                </div>
                                <a href="#thirteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Ford</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Glam Media</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jay Sprogell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/knicks-open-2010.jpg">
                                    <img src="/post-production/images/knicks-open-2010.jpg" alt="New York Knicks Open 2010"/></a>
                                </div>
                                <a href="#eighteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>New York Knicks Open 2010</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Kai Lee</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>Steve Cohen</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/celebrity-cruise.jpg">
                                    <img src="/post-production/images/celebrity-cruise.jpg" alt="Celebrity Cruise"/></a>
                                </div>
                                <a href="#twelve"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Celebrity Cruise</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Concentric Communications</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Duncan Skiles</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>David Lengel</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/honor-tradition-repsect.jpg">
                                    <img src="/post-production/images/honor-tradition-repsect.jpg" alt="Honor. Tradition.  Respect."/></a>
                                </div>
                                <a href="#sixteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Honor. Tradition.  Respect.</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>The New York Rangers</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Mark Tyler</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>Steve Cohen</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/jordyn-mallory-prayers.jpg">
                                    <img src="/post-production/images/jordyn-mallory-prayers.jpg" alt="Jordyn Mallory 'Prayers' Music Video"/></a>
                                </div>
                                <a href="#zero"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>Jordyn Mallory "Prayers" Music Video</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Jordyn Mallory</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/nbc-diversity.jpg">
                                    <img src="/post-production/images/nbc-diversity.jpg" alt="NBC Diversity"/></a>
                                </div>
                                <a href="#six"></a> 
                                <dl>
                                    <dt class="description">Title:</dt> 
                                    <dd>NBC Diversity</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>NBC</dd>
                                    <dt class="description">Director:</dt>
                                    <dd>Jonathan Wendell</dd>
                                    <dt class="description">Editor &amp; GFX:</dt>
                                    <dd>Jonathan Wendell</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/misty-island-rescue.jpg">
                                    <img src="/post-production/images/misty-island-rescue.jpg" alt="Misty Island Rescue"/></a>
                                </div>
                                <a href="#fourteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Misty Island Rescue</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>HIT Entertainment</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>Steve Cohen</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/50cent.jpg">
                                    <img src="/post-production/images/50cent.jpg" alt="Baby Bye Me"/></a>
                                </div>
                                <a href="#nineteen"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>Baby Bye Me</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>Glaceau</dd>
                                    <dt class="description">Post Production:</dt>
                                    <dd>Manhattan Place Entertainment</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
                                    <dt class="description">Post Producer:</dt>
                                    <dd>Steve Cohen</dd>
                                </dl>
                            </li>
                        <!-- case study -->
                            <li>
                                <div class="gallery-images">
                                    <a class="gallery_overlay" href="/post-production/images/artichoke.jpg">
                                    <img src="/post-production/images/artichoke.jpg" alt="iVillage Learn How Now"/></a>
                                </div>
                                <a href="#nine"></a> 
                                <dl>
                                    <dt class="description">TITLE:</dt>
                                    <dd>iVillage Learn How Now</dd>
                                    <dt class="description">Client:</dt>
                                    <dd>iVillage</dd>
                                    <dt class="description">Editor:</dt>
                                    <dd>Jonathan Wendell</dd>
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
                <script>QT_WriteOBJECT('/videos/dark-light/dark-light.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="two" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/herschel-trailer/herschel-trailer.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="three" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="four" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/sandra-day-oconnor/sandra-day-oconnor.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="five" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/jordans/jordans.mov', '640', '348', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="six" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/nbc-diversity/nbc-diversity.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eight" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/50cent/50cent.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="nine" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/pie-crust/pie-crust.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="ten" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/big-east-final/big-east-final.mov','640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eleven" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/digital/kohls-rock-republic/eileen-glam-rock-republic.mov','640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="twelve" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/celebrity-cruise/celebrity-x-cruises.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="thirteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/digital/escape-to-nyc/escape-to-nyc.mov','640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="fourteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/misty-island-rescue/misty-island-rescue.mov', '540', '320', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="fifteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/kohls-spring-trends/kohls-spring-trends.mov','640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="sixteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/opens/rangers_in_arena/rangers_in_arena.mov', '580', '380', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="seventeen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/opens/knicks-open-final/knicks-open-final.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="eighteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/opens/nyk-tease/nyk-tease.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="nineteen" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/50cent/50cent.mov', '640', '376', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
            </div>
            <div id="zero" class="modal">
                <a class="close" href="">close</a>
                <script>QT_WriteOBJECT('/videos/jordyn-mallory-prayers/jordyn-mallory-prayers.mov', '640', '341', '', 'AUTOPLAY', 'True', 'SCALE', 'Aspect');</script>
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