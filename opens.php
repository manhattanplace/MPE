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
<head><meta charset="UTF-8">
<title>Opens Video Library</title>
<meta name="description" content="Browse the best of Steve Cohen's Opens Reel.">
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
        <h3 class="library">OPENS</h3>
        <div class="container">
            <div class="wt-gallery">
                <div class="main-screen">
                    <img id="bg-img" src="assets/spacer.png" alt="spacer"/>
                    <a href="#"><img id="main-img" src="images/case-study.jpg" alt="placeholder"/></a>
                    <img src="assets/prev.png" id="prev-btn" alt="button"/>
                    <img src="assets/next.png" id="next-btn" alt="button"/>
                    <dl class="desc"></dl>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                       <div class="preloader"><img src="assets/loader.gif" alt="spiny thing"/></div>
                </div>                
            <div class="c-panel">
                <div id="thumbs-back"><img src="assets/prev_thumb.png" alt="button"/></div>
                   <div class="thumbnails">
                <ul>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/opens/fox-superbowl.jpg">
                               <img src="images/opens/fox-superbowl-thumb.jpg" alt="Give My Regards to Broadway" ></a>
                          </div>
                           <a href="http://vimeo.com/86432448"></a>
                        <dl>
                            <dd>Superbowl XLVIII Pre Game Show Open</dd>
                            <dd>FOX NFL Sunday</dd>   
                            <dt class="description">Title:</dt> 
                                <dd>Give My Regards to Broadway</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>FOX Sports</dd>
                            <dt class="description">Producer:</dt> 
                                <dd>Bernie Kim</dd>
                            <dt class="description">DIRECTOR/DP:</dt> 
                                <dd>Steve Cohen </dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/opens/love-and-hip-hop.jpg">
                               <img src="images/opens/love-and-hip-hop-thumb.jpg" alt="Love and Hip Hop" ></a>
                          </div>
                           <a href="opens/love-and-hip-hop/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>"Love and Hip Hop" show Open</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>VH-1</dd>
                            <dt class="description">DIRECTOR OF OPEN:</dt> 
                                <dd>Snejina Latev</dd>
                            <dt class="description">LINE PRODUCER:</dt> 
                                <dd>Jennifer Moy</dd>
                            <dt class="description">PRODUCTION MANAGER:</dt> 
                                <dd>Jon Lee</dd>
                            <dt class="description">DP:</dt> 
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/opens/deniro.jpg">
                               <img src="images/opens/deniro-thumb.jpg" alt="FOX NFL Sunday - Season Opener" ></a>
                          </div>
                           <a href="opens/fox-nfl-sunday-deniro/video.php"></a>
                        <dl>   
                            <dt class="description">Title:</dt> 
                                <dd>FOX NFL Sunday - Season Opener</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>Fox Sports</dd>
                            <dt class="description">PRODUCER:</dt> 
                                <dd>Bill Richards</dd>
                            <dt class="description">Director of Photography:</dt> 
                                <dd>Steve Cohen </dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/opens/knicks-2012-intro.jpg">
                               <img src="images/opens/knicks-2012-intro-thumb.jpg" alt="2012 NY Knicks Introduction - Video" ></a>
                          </div>
                           <a href="opens/knicks-open-final/video.php"></a>
                        <dl>   
                            <dt class="description">Title:</dt> 
                                <dd>2012 NY Knicks Introduction - Video</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>NY Knicks</dd>
                            <dt class="description">PRODUCER:</dt> 
                                <dd>Shawn Bennett</dd>
                            <dt class="description">DIRECTOR/DP:</dt> 
                                <dd>Steve Cohen </dd>
                            <dt class="description">POST PRODUCTION:</dt> 
                                <dd>Manhattan Place Entertainment</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/opens/c-anthony.jpg">
                               <img src="images/opens/c-anthony-thumb.jpg" alt="MSG Show 'Elements'"></a>
                          </div>
                           <a href="opens/msg-show-elements/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>MSG Show 'Elements'</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>MSG Creative Services</dd>
                            <dt class="description">Producer:</dt> 
                                <dd>Dan Williams/Jason Joly</dd>
                            <dt class="description">Director of Photography:</dt> 
                                <dd>Steve Cohen </dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-nyk.jpg">
                               <img src="images/thumbs/case-study-nyk.jpg" alt="NY Knicks Introduction"/></a>
                          </div>
                           <a href="opens/nyk-tease/video.php"></a>
                        <dl>   
                            <dt class="description">Title:</dt> 
                                <dd>NY Knicks Introduction - Video</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>NY Knicks</dd>
                            <dt class="description">PRODUCER:</dt> 
                                <dd>Shawn Bennett</dd>
                            <dt class="description">DIRECTOR/DP:</dt> 
                                <dd>Steve Cohen </dd>
                            <dt class="description">EDITORS:</dt> 
                                <dd>Doug Spitzer/John Dorocky</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment </dd>
                        </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-nyr-2012.jpg">
                            </a><img src="images/thumbs/case-study-nyr-2012.jpg" alt="NY Rangers"/>
                        </div>
                        <a href="opens/nyr-open-2012r/video.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt> 
                                <dd> "This Is New York Hockey"</dd>
                            <dt class="description">Client:</dt> 
                                <dd> NY Rangers</dd>
                            <dt class="description">PRODUCER:</dt> 
                                <dd> Ryan Halkett</dd>
                            <dt class="description">DIRECTOR/DP:</dt> 
                                <dd> Steve Cohen</dd>
                            <dt class="description">POST PRODUCTION:</dt> 
                                <dd> The Famous Group</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd> Manhattan Place Entertainment</dd>
                            <dt class="description">Award:</dt>
                                <dd class="single-line">2012 Telly:</dd>
                                <dd class="single-line">Best Promotional Sports Piece </dd> 
                                <dd class="award-winners"></dd>
                        </dl>
                    </li>
        <!-- case study -->
                    <li >
                        <div>
                            <a class="gallery_overlay" href="images/case_study_rangers_75.jpg">
                            </a><img src="images/thumbs/case_study_rangers_75.jpg" alt="New York Rangers"/>
                        </div>
                        <a href="opens/rangers_75th/video.php"></a>
                            <dl>
                                <dt class="description">TITLE:</dt> 
                                    <dd>"A 75 Year Legacy"</dd>
                                <dt class="description">CLIENT:</dt> 
                                    <dd> New York Rangers</dd>
                                <dt class="description">AGENCY:</dt> 
                                    <dd>Imaginary Forces</dd>
                                <dt class="description">Creative Director:</dt> 
                                    <dd> Peter Frankfurt </dd>
                                <dt class="description">Co-Director:</dt> 
                                    <dd class="single-line"> Steve Cohen  &amp; Imaginary Forces</dd> 
                                <dt class="description">Director of Photography:</dt> 
                                    <dd>Christopher Bierlein &amp; Jim Feely</dd>
                                <dt class="description">Production Services:</dt> 
                                    <dd>Manhattan Place Entertainment</dd>
                            </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_superbowl_xlii.jpg">
                            </a><img src="images/thumbs/case_study_superbowl_xlii.jpg" alt="Super Bowl XLII"/>
                        </div>  
                        <a href="opens/giants_superbowl/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Super Bowl XLII</dd>
                                <dd>"Resiliency"</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>FOX Sports</dd> 
                            <dt class="description">Producer:</dt> 
                                <dd>Derrick Manning</dd>
                            <dt class="description">Director/DP:</dt> 
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_rangers_arena.jpg">
                            </a><img src="images/thumbs/case_study_rangers_arena.jpg" alt="New York Rangers"/>
                        </div>
                        <a href="opens/rangers_in_arena/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Honor, Tradition, Respect</dd> 
                            <dt class="description">CLIENT:</dt> 
                                <dd>New York Rangers</dd> 
                            <dt class="description">Executive Producer:</dt> 
                                <dd>Ryan Halkett</dd>
                            <dt class="description">Director/DP:</dt> 
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_imaranger02.jpg">
                               </a><img src="images/thumbs/case_study_imaranger02.jpg" alt="New York Rangers"/>
                          </div>
                        <a href="opens/iam_a_ranger02/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>I am a Ranger</dd>
                            <dt class="description">CLIENT:</dt> 
                                <dd>New York Rangers </dd>
                            <dt class="description">Executive producer:</dt> 
                                <dd>Ryan Halkett</dd>
                            <dt class="description">Director/DP(s):</dt> 
                                <dd>Steve Cohen  &amp;</dd>
                                <dd class="single-line">Christopher Bierlein</dd>
                            <dt class="description">Creative Director:</dt> 
                                <dd>Mark Valentine</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_iamaranger_location.jpg">
                               </a><img src="images/thumbs/case_study_iamaranger_location.jpg" alt="New York Rangers"/>
                          </div>
                           <a href="opens/iamaranger_location/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>I am a Ranger</dd>
                            <dt class="description">CLIENT:</dt> 
                                <dd>New York Rangers </dd>
                            <dt class="description">Executive producer:</dt> 
                                <dd>Ryan Halkett</dd>
                            <dt class="description">Director/DP(s):</dt> 
                                <dd>Steve Cohen  &amp;</dd>
                                <dd  class="single-line">Christopher Bierlein</dd>
                            <dt class="description">Creative Director:</dt> 
                                <dd>Mark Valentine</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_knicks_new_era.jpg">
                            </a><img src="images/thumbs/case_study_knicks_new_era.jpg" alt="New York Knicks"/>
                        </div>
                        <a href="opens/knicks_arena/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>"A New Era"</dd>
                            <dt class="description">CLIENT:</dt> 
                                <dd>New York Knicks Marketing</dd> 
                            <dt class="description">Producer:</dt> 
                                <dd>Shawn Bennett</dd>
                            <dt class="description">Director/DP:</dt> 
                                <dd>Steve Cohen</dd>
                            <dt class="description">Creative Director:</dt> 
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt> 
                                <dd>Manhattan Place Entertainment
                        </dl>
                    </li>
        <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_qtip.jpg">
                            </a><img src="images/thumbs/case_study_qtip.jpg" alt="New York Knicks"/>
                        </div>
                        <a href="opens/qtip_go_ny/video.php"></a>
                        <dl>
                           <dt class="description">Title:</dt> 
                                <dd> "Go New York Go"</dd> 
                        <dt class="description">CLIENT:</dt> 
                                <dd> New York Knicks</dd> 
                        <dt class="description">Producer:</dt> 
                                <dd> Michelle Harris</dd>
                        <dt class="description">Director/DP:</dt> 
                                <dd> Christopher Bierlein</dd>
                        <dt class="description">Production Services:</dt> 
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="Next Button"/></div> 
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
            <li>Terms of Service and MPE General Policy for Field Shoots. &nbsp; <a href="tos.pdf">Click here for PDF</a></li>
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