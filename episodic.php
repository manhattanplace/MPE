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
<title>Episodic Video Library</title>
<meta name="description" content="Teases and Episodic Video Library">
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
        <h3 class="library">EPISODIC</h3>
        <div class="container">
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
                        <a class="gallery_overlay" href="images/episodic/sydney-ultrabook-new-poster.jpg"></a>
                        <img src="images/episodic/sydney-ultrabook-new-thumb.jpg" alt="Intel Ultra Book Race - Sydney Episode"/>
                    </div>
                    <a href="episodic/ultrabook-sydney/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Intel Ultra Book Race - Sydney Episode</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>Noise</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
                    <!-- case study -->
                    <li>
                    <div class="gallery-images">
                        <a class="gallery_overlay" href="images/episodic/ultrabook-st-petersburg.jpg"></a>
                        <img src="images/episodic/ultrabook-st-petersburg-thumb.jpg" alt="Intel Ultra Book Race - St. Petersburg Episode"/>
                    </div>
                    <a href="episodic/st-petersburg-ultrabook/video.php"></a>
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>Intel Ultra Book Race - St. Petersburg Episode</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>Noise</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                    </dl>
                </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/boys-in-the-hall2.jpg">
                               <img src="images/thumbs/boys-in-the-hall2.jpg" alt="Boys in the Hall"/>
                            </a>
                          </div>
                           <a href="episodic/boys-in-the-hall/boys.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Boys in the Hall</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Flagstaff Films</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Steve Stern</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION DESIGNER:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay"  href="images/case_study_srtc_casting.jpg">
                                <img src="images/thumbs/case_study_srtc_casting.jpg" alt="Speed Road Tour Challenge"/>
                            </a>
                        </div>
                        <a href="episodic/srtc_casting/video.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt>
                                <dd>Speed Road Tour Challenge</dd>
                                <dd class="single-line">"Casting Special"</dd>
                            <dt class="description">Client:</dt>
                                <dd>Speed Channel</dd>
                            <dt class="description">Agency:</dt>
                                <dd>Saatchi &amp; Saatchi &amp; Brandarc </dd>
                            <dt class="description">EXECUTIVE PRODUCERS:</dt>
                                <dd>Steve Cohen &amp; Chris Long </dd>
                            <dt class="description">Producers:</dt>
                                <dd>BJ Acaley, Michael Strom</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                                <dd>&amp; Redline Films</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-miranda-cosgrove.jpg">
                                <img src="images/thumbs/case-study-miranda-cosgrove.jpg" alt="Miranda Cosgrove on Stage"/>
                            </a>
                        </div>
                        <a href="episodic/miranda-cosgrove/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>"Dancing Crazy"<span style="text-transform:none;"> with</span> Miranda Cosgrove</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Trailer Park</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Mike Leathers</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen <span style="text-transform:none;">(east coast concert)</span></dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_sponge_bob.jpg">
                               <img src="images/thumbs/case_study_sponge_bob.jpg" alt="Spongebob Special"/>
                            </a>
                          </div>
                           <a href="episodic/sponge_bob/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Spongebob Special</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Amy Kim</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-depth-chart.jpg">
                               <img src="images/thumbs/case-study-depth-chart.jpg" alt="The Depth Chart"/> </a>
                          </div>
                           <a href="episodic/depth-chart/video.php"></a>
                        <dl>
                        <dt class="description">Title:</dt>
                            <dd>The Depth Chart</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>DLP Productions</dd>
                        <dt class="description">EXECUTIVE PRODUCER:</dt>
                            <dd>Michael J. Hughes</dd>
                        <dt class="description">DP'<span style="text-transform:none;">s:</span></dt>
                            <dd>Brent Ramsey, </dd>
                            <dd class="single-line">Chris Vanderwall (Oklahoma)</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-jeremy-lin.jpg">
                               <img src="images/thumbs/case-study-jeremy-lin.jpg" alt="Jeremy Lin"/> </a>
                          </div>
                           <a href="episodic/jeremy-lin/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>To the Point - Jeremy Lin</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd>
                            <dt class="description">EXECUTIVE PRODUCER:</dt>
                                <dd>Doug Field</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Hamilton Fisher</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_halo.jpg">
                                <img src="images/thumbs/case_study_halo.jpg" alt="Halo Awards"/>
                            </a>
                        </div>
                        <a href="episodic/halo/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Halo Awards</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Teen Nick</dd>
                            <dt class="description">Director:</dt>
                                <dd>JJ Pagano</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Joe Pappalardo</dd>
                            <dt class="description">Coordinating Producer:</dt>
                                <dd>Beverly Chan</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay"  href="images/case_study-rough-riders.jpg">
                                <img src="images/thumbs/case_study-rough-riders.jpg" alt="Rough Riders"/>
                            </a>
                        </div>
                        <a href="episodic/rough-rider/video-rough-rider.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt>
                                <dd>Rough Riders</dd>
                            <dt class="description">Client:</dt>
                                <dd>FUEL TV</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Second Unit DP:</dt>
                                <dd>Eric Halberstadt</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay"  href="images/case-study-burns.jpg">
                                <img src="images/thumbs/case-study-burns.jpg" alt="Ed Burns"/>
                            </a>
                        </div>
                        <a href="episodic/burns/video.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt>
                                <dd>The Mortified Sessions - Ed Burns</dd>
                            <dt class="description">Client:</dt>
                                <dd>Long Pond Media</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Dana Bayal</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay"  href="images/case-study-mommy.jpg">
                                <img src="images/thumbs/case-study-mommy.jpg" alt="Mommy Double"/>
                            </a>
                        </div>
                        <a href="episodic/mommy-double/video.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt>
                                <dd>Mommy Double</dd>
                            <dt class="description">Client:</dt>
                                <dd>Nickelodeon</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Eileen Braun</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_srtc_casting.jpg">
                                <img src="images/thumbs/case_study_srtc_casting.jpg" alt="Speed Road Tour Challenge"/>
                            </a>
                        </div>
                        <a href="episodic/srtc_daytona/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Speed Road Tour Challenge</dd>
                                <dd class="single-line">"Daytona"</dd>
                            <dt class="description">Client:</dt>
                                <dd>Speed Channel</dd>
                            <dt class="description">Agency:</dt>
                                <dd>Saatchi &amp; Saatchi &amp; Brandarc </dd>
                            <dt class="description">Executive Producers:</dt>
                                <dd>Steve Cohen &amp; Chris Long</dd>
                            <dt class="description">Producers:</dt>
                                <dd>BJ Acaley, Michael Strom </dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment &amp;</dd>
                                <dd class="single-line">Redline Films</dd>
                        </dl>
                    </li>
                   <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_srtc_casting.jpg">
                                <img src="images/thumbs/case_study_srtc_casting.jpg" alt="Speed Road Tour Challenge"/>
                            </a>
                        </div>
                        <a href="episodic/srtc_richmond/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Speed Road Tour Challenge</dd>
                                <dd>"Richmond"</dd>
                            <dt class="description">Client:</dt>
                                <dd>Speed Channel</dd>
                            <dt class="description">Agency:</dt>
                                <dd>Saatchi &amp; Saatchi &amp; Brandarc </dd>
                            <dt class="description">Executive Producers:</dt>
                                <dd>Steve Cohen &amp; Chris Long</dd>
                            <dt class="description">Producers:</dt>
                                <dd>BJ Acaley, Michael Strom</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment &amp;</dd>
                                <dd class="single-line">Redline Films</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_best_buddies.jpg">
                                <img src="images/thumbs/case_study_bestbuddies.jpg" alt="Best Buddies"/>
                            </a>
                        </div>
                        <a href="episodic/bestbuddies/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Best Buddies</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Kent Gordis Productions</dd>
                            <dt class="description">DIRECTORS OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen &amp; Chris Bierlien</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_fif.jpg">
                               <img src="images/thumbs/case_study_fif.jpg" alt="Five Ingredient Fix"/>
                            </a>
                        </div>
                           <a href="episodic/five-ingredient-fix/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Five Ingredients Fix</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>IW Productions</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Chris Bierlein</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_mocap.jpg">
                                <img src="images/thumbs/case_study_mocap.jpg" alt="MoCap"/>
                            </a>
                        </div>
                        <a href="episodic/MOCAP/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>MoCap</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>World Wide Biggies</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Albie Hecht</dd>
                            <dt class="description">SENIOR PRODUCER:</dt>
                                <dd>Kari Kim</dd>
                            <dt class="description">COORDINATING PRODUCER:</dt>
                                <dd>Brendan Hermes</dd>
                            <dt class="description">Directors:</dt>
                                <dd>Steve Cohen, Jon Belinski,</dd>
                                <dd class="single-line">Chris Bierlein &amp; Axel Baumann</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                        <a class="gallery_overlay" href="images/case_study_bet_the_house.jpg">
                            <img src="images/thumbs/case_study_bet_the_house.jpg" alt="Bet the House"/>
                        </a>
                        </div>
                        <a href="episodic/bet_the_house/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Bet The House</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon</dd>
                            <dt class="description">EXECUTIVE PRODUCER:</dt>
                                <dd>Eileen Braun </dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Chris Bierlein</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                        <a class="gallery_overlay" href="images/case_study_hunt.jpg">
                            <img src="images/thumbs/case_study_hunt.jpg" alt="The Hunt"/>
                        </a>
                        </div>
                        <a href="episodic/hunt/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>The Hunt</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon</dd>
                            <dt class="description">EXECUTIVE PRODUCER:</dt>
                                <dd>Eileen Braun</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Chris Bierlein</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_pups.jpg">
                                <img src="images/thumbs/case_study_pups.jpg" alt="A Pup Grows Up"/>
                            </a>
                        </div>
                        <a href="episodic/pup/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>A Pup Grows Up</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon</dd>
                            <dt class="description">EXECUTIVE PRODUCER:</dt>
                                <dd>Magda Liolis</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                   <!-- case study -->
                    <li>
                        <div>
                        <a class="gallery_overlay" href="images/case_study_madden.jpg">
                            <img src="images/thumbs/case_study_madden.jpg" alt="John Madden"/>
                        </a>
                        </div>
                        <a href="episodic/madden/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>John Madden &ndash; </dd>
                                <dd class="single-line">Monday Night Football Experience</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>TWI</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Sandy Montag</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Gary Lang </dd>
                            <dt class="description">DIRECTORS OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen &amp; John Davis</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="next page"/></div>
            <div class="pagination"></div>
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