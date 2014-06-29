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
<title>Promos Video Library</title>
<meta name="description" content="Promos Video Library">
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
        <h3 class="library">PROMOS</h3>
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
                            <a class="gallery_overlay" href="images/promos/glory-last-man-standing.jpg"></a>
                            <img src="images/promos/glory-last-man-standing-thumb.jpg" alt="Glory Last Man Standing"/>
                        </div>
                        <a href="promos/glory/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Glory Last Man Standing</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Doug LeBow</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Field Production:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                            <dt class="description">Post Production:</dt>
                                <dd>REVEAL</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/glory-girls2.jpg"></a>
                            <img src="images/promos/glory-girls2-thumb.jpg" alt="Glory Girls"/>
                        </div>
                        <a href="promos/glory-girls/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Glory Girls</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Doug LeBow</dd>
                            <dt class="description">Director/Creative Director:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Field Production:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                            <dt class="description">Post Production:</dt>
                                <dd> Creative Group</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/kfc-1.jpg"></a>
                            <img src="images/promos/kfc-1-thumb.jpg" alt="Impractical Jokers- truTV 'KFC How do you prepare to dare?'"/>
                        </div>
                        <a href="promos/kfc-1/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Impractical Jokers- truTV 'KFC How do you prepare to dare?'</dd>
                            <dt class="description">Client:</dt>
                                <dd>ElevenO2</dd>
                            <dt class="description">Director:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/kfc-2.jpg"></a>
                            <img src="images/promos/kfc-2-thumb.jpg" alt="Impractical Jokers- truTV 'KFC How do you prepare to dare?'"/>
                        </div>
                        <a href="promos/kfc-2/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Impractical Jokers- truTV 'KFC How do you prepare to dare?'</dd>
                            <dt class="description">Client:</dt>
                                <dd>ElevenO2</dd>
                            <dt class="description">Director:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study/promos/anderson-cooper.jpg">
                            </a><img src="images/case-study/promos/anderson-cooper-thumb.jpg" alt="Backstage with Anderson Cooper"/>
                        </div>
                        <a href="promos/anderson-cooper/video.php"></a>
                        <dl>
                            <dt class="description">Title</dt>
                                <dd>Backstage with Anderson Cooper </dd>
                            <dt class="description">Director:</dt>
                                <dd> Steve Cohen</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd> Brian O'Carrol</dd>
                            <dt class="description">Production Company:</dt>
                                <dd> Danieli Entertainment</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment<dd>
                        </dl>       
                    </li>
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/14-stanley-cup.jpg"></a>
                            <img src="images/promos/14-stanley-cup-thumb.jpg" alt="2014 Stanley Cup Final Promo"/>
                        </div>
                        <a href="promos/14-stanley-cup/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>2014 Stanley Cup Final Promo</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Jason Joly and Dan Williams</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/ride-along-1.jpg"></a>
                            <img src="images/promos/ride-along-1-thumb.jpg" alt="Impractical Joker's Marathon sponsored by Universal Pictures 'Ride Along'"/>
                        </div>
                        <a href="promos/ride-along-1/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Impractical Joker's Marathon sponsored by Universal Pictures 'Ride Along'</dd>
                            <dt class="description">Client:</dt>
                                <dd>ElevenO2</dd>
                            <dt class="description">Director:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>   
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/ride-along-2.jpg"></a>
                            <img src="images/promos/ride-along-2-thumb.jpg" alt="Impractical Joker's Marathon sponsored by Universal Pictures 'Ride Along'"/>
                        </div>
                        <a href="promos/ride-along-2/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Impractical Joker's Marathon sponsored by Universal Pictures 'Ride Along'</dd>
                            <dt class="description">Client:</dt>
                                <dd>ElevenO2</dd>
                            <dt class="description">Director:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/pac-12-oregon.jpg"></a>
                            <img src="images/promos/pac-12-oregon-thumb.jpg" alt="Oregon Ducks 'Go Ducks' Promo"/>
                        </div>
                        <a href="promos/pac-12-oregon/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Oregon Ducks "Go Ducks" Promo</dd>
                            <dt class="description">Client:</dt>
                                <dd>Pac-12 Networks</dd>
                            <dt class="description">Producers:</dt>
                                <dd>Ted Ishler, Joel Denbow</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                                    
                    <!-- case study  -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/commercial/kickass2.jpg"></a>
                            <img src="images/commercial/kickass2-thumb.jpg" alt="Kickass 2"/>
                        </div>
                        <a href="promos/kickass2/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd style="text-transform:none;">"Kick Ass 2 Promo</dd>
                            <dt class="description">Client:</dt>
                                <dd>ElevenO2</dd>
                            <dt class="description">DIRECTOR:</dt>
                                <dd>Barry Bross</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Field Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-patrick.jpg">
                            <img src="images/thumbs/case-study-patrick.jpg" alt="Dan Patrick"/></a>
                        </div>
                        <a href="promos/dan-patrick/video-dan-patrick.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>The Dan Patrick Show - "Fritzy"</dd> 
                            <dt class="description">Client:</dt>
                                <dd> DirecTV</dd> 
                            <dt class="description">Producer:</dt>
                                <dd> Barton Peters</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">2ND Unit DP:</dt>
                                <dd>Brent Ramsey</dd>
                            <dt class="description">Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>   
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/pac-12-arizona.jpg"></a>
                            <img src="images/promos/pac-12-arizona-thumb.jpg" alt="Arizona Wildcats 'Ready For Battle' Promo"/>
                        </div>
                        <a href="promos/pac-12-arizona/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Arizona Wildcats "Ready For Battle"  Promo</dd>
                            <dt class="description">Client:</dt>
                                <dd>PAC-12 Networks</dd>
                            <dt class="description">Producers:</dt>
                                <dd>Ted Ishler, Joel Denbow</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/promos/pac-12-coach.jpg"></a>
                            <img src="images/promos/pac-12-coach-thumb.jpg" alt="PAC-12 Networks 'Coaches - Go-Team'  promo"/>
                        </div>
                        <a href="promos/pac-12-coach/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>PAC-12 Networks "Coaches - Go-Team" Promo</dd>
                            <dt class="description">Client:</dt>
                                <dd>Pac-12 Networks</dd>
                            <dt class="description">Producers:</dt>
                                <dd>Ted Ishler, Joel Denbow</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">PRODUCTION SERVICES:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>                
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_twilightnewmoon.jpg">
                            </a><img src="images/thumbs/case_study_twilight_newmoon.jpg" alt="Twilight New Moon"/>
                        </div>
                        <a href="promos/twilight_newmoon/twilight_newmoon.php"></a>
                        <dl>
                            <dt class="description">Title</dt>
                                <dd>VH1 Critics Choice Movie Awards </dd>
                            <dt class="description">CLIENT:</dt> 
                                <dd>The Film Syndicate</dd>
                            <dt class="description">AGENCY:</dt>
                                <dd>VH1 Movies</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd> Bryan Johnson</dd>
                            <dt class="description">Director:</dt>
                                <dd> Cory Nealon</dd>
                            <dt class="description">Producer:</dt>
                                <dd> Frank Berin</dd>
                            <dt class="description">Director of Photography:</dt>
                                <dd>Joe Arcidiacano</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment<dd>
                        </dl>       
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_studyirl_nose.jpg">
                            </a><img src="images/thumbs/case_studyirl_nose.jpg" alt="IRC Driver"/>
                        </div>
                        <a href="promos/IRL01/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Eyes Wide Shut</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Versus</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Leon Schweir</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Tripp Dixon</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                            <dt class="description">Award:</dt>
                                <dd class="single-line">2011 Telly:</dd>
                                <dd class="single-line">Best Promotional Sports Piece</dd> 
                                <dd class="award-winners"></dd>
                        </dl>
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_hnl01.jpg">
                            <img src="images/thumbs/case_study_hnl01.jpg" alt="Hockey Night Live"/></a>
                        </div>
                        <a href="promos/hnl01/hnl01.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Hockey Night Live</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Doug Field</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Steve DeGroot</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>    
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-mike-breen.jpg">
                            <img src="images/thumbs/case-study-mike-breen.jpg" alt="Mike Breen 'In the Zone'"/></a>
                        </div>
                        <a href="promos/taxi-mike_breen/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Mike Breen "In the Zone"</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Agency:</dt>
                                <dd>Amalgamated</dd>  
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-al-trautwig.jpg">
                            <img src="images/thumbs/case-study-al-trautwig.jpg" alt="Al Trautwig 'Whatever He Wants'"/></a>
                        </div>
                        <a href="promos/taxi-control_room/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Al Trautwig "Whatever He Wants"</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Agency:</dt>
                                <dd>Amalgamated</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bob-papa.jpg">
                            <img src="images/thumbs/case-study-bob-papa.jpg" alt="Giants Rewind"/></a>
                        </div>
                        <a href="promos/papa/video-papa.php"></a>
                        <dl>
                        <dt class="description">Title:</dt>
                            <dd>"Giants Rewind"</dd> 
                        <dt class="description">CLIENT:</dt>
                            <dd>MSG Media</dd>
                        <dt class="description">Producer:</dt>
                            <dd>Eric Jergenson</dd>
                        <dt class="description">Director:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Director of Photography:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd> Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_united.jpg">
                            <img src="images/thumbs/case_study_united.jpg" alt="United We Play"/></a>
                        </div>
                        <a href="promos/united_we_play/united_we_play.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>United We Play</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Liberty Marketing</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Howard Jacobs</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Amy Scheer</dd>
                            <dt class="description">CREATIVE DIRECTOR:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">DIRECTOR/DP/WRITER:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                            <dt class="description">Award:</dt>
                                <dd class="single-line">2010 Telly:</dd>
                                <dd class="single-line">Videography/Cinematography</dd>
                                <dd>Editing &amp; Copywriting</dd>
                                <dd class="award-winners"></dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_irl_may.jpg">
                            <img src="images/thumbs/case_study_irl_may.jpg" alt="Indy 500 on Versus"/></a>
                        </div>
                        <a href="promos/may/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Indy 500</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>Versus</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Leon Schweir</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Tripp Dixon</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/pooch.jpg"></a>
                            <img src="images/pooch-thumb.jpg" alt="ESPN SportsCenter Spot"/>
                        </div>
                        <a href="promos/espn-sports-center/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>ESPN "SportsCenter Spot"</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Editor:</dt>
                                <dd>Dean Marcial</dd>
                                <dt class="description">Production Company:</dt>
                                    <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_sherlock_holmes.jpg">
                            </a><img src="images/thumbs/case_study_sherlock_holmes.jpg" alt="Jude Law"/>
                        </div>  
                        <a href="promos/sherlock_holmes/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd> Sherlock Holmes Promo</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>The Film Syndicate</dd>
                            <dt class="description">AGENCY:</dt>
                                <dd>VH-1 Movies</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd> Bryan Johnson</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Kristin Walker</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_letsjustplay_ltw.jpg">
                            </a><img src="images/thumbs/case_study_letsjustplay_ltw.jpg" alt="Live These Words"/>
                        </div>  
                        <a href="promos/letsjustplay_ltw/letsjustplay_ltw.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Live these Words</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon Gas</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Jay Schmalhalz</dd>
                            <dt class="description">DIRECTOR:</dt>
                                <dd>Marcus Wagner</dd>
                            <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">CAMERA:</dt>
                                <dd>Christopher Bierlein</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study  -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_spiderwick_jared.jpg">
                            <img src="images/thumbs/case_study_spiderwick_jared.jpg" alt="The Spiderwick Chronicles"/></a>
                        </div>
                        <a href="promos/spiderwick_jared/jared.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>  
                                <dd>The Spiderwick Chronicles - Jared</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon Pictures</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Jay Schmalhalz</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Anthony Gelsomino</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_spiderwick_mallory.jpg">
                            <img src="images/thumbs/case_study_spiderwick_mallory.jpg" alt="The Spiderwick Chronicles"/></a>
                        </div>
                        <a href="promos/spiderwick_mallory/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>The Spiderwick Chronicles - Mallory</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>Nickelodeon Pictures</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Jay Schmalhalz</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Anthony Gelsomino</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study -->
                    <li>
                        <div class="gallery-images">
                            <a class="gallery_overlay" href="images/case-study-dance-new.jpg"></a>
                            <img src="images/thumbs/case-study-dance-new.jpg" alt="Summer Block Party Concert Wraps"/>
                        </div>
                        <a href="promos/block-party-music/video.php"></a>
                        <dl>
                            <dt class="description">Title</dt>
                                <dd>Summer Block Party Concert Wraps </dd>
                            <dt class="description">CLIENT:</dt> 
                                <dd>MSG Media</dd>
                            <dt class="description">Producer:</dt>
                                <dd> Eric Jergenson</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment<dd>
                        </dl>       
                    </li>
                    <!-- case study -->
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_knicks_nate_robinson.jpg">
                            <img src="images/thumbs/case_study_knicks_nate_robinson.jpg" alt="Nate Robinson"/></a>
                        </div>
                        <a href="promos/Nate_Robinson/nate_robinson.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Nate Robinson</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Knicks Marketing</dd> 
                            <dt class="description">Creative Director:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">WRITER:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study  
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_50cent.jpg">
                            </a><img src="images/thumbs/case_study_50cent.jpg" alt="50 Cent at mic"/>
                        </div>
                        <a href="promos/50cent/50cent.php"></a>
                        <dl>
                            <dt class="description">TITLE:</dt>
                                <dd>Baby By Me</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd> Glaceau</dd>
                            <dt class="description">CREATIVE DIRECTOR:</dt>
                                <dd> Sue Kim</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd> Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                                <dt class="description">Award:</dt>
                                <dd class="single-line">2010 Telly:</dd>
                                <dd class="single-line">Best Videography/Cinematography</dd> 
                        </dl>
                    </li> 
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_irl_2.jpg">
                            <img src="images/thumbs/case_study_irl_2.jpg" alt="What It Takes To Win"/></a>
                        </div>
                    <a href="promos/indycar/video.php"></a> 
                    <dl>
                        <dt class="description">Title:</dt>
                            <dd>What It Takes To Win</dd>
                        <dt class="description">CLIENT:</dt>
                            <dd>Versus</dd>
                        <dt class="description">Executive Producer:</dt>
                            <dd>Leon Schweir</dd>
                        <dt class="description">Creative Director:</dt>
                            <dd>Tripp Dixon</dd>
                        <dt class="description">Director/DP:</dt>
                            <dd>Steve Cohen</dd>
                        <dt class="description">Production Services:</dt>
                            <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-banks.jpg">
                            <img src="images/thumbs/case-study-banks.jpg" alt="Opening Drive Live"/></a>
                        </div>
                        <a href="promos/banks/video-banks.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>"Opening Drive Live"</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Eric Jergenson</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:></dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_newera.jpg">
                            <img src="images/thumbs/case_study_newera.jpg" alt="New York Knicks"/></a>
                        </div>
                        <a href="promos/new_era/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>A New Era</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Knicks Marketing</dd> 
                            <dt class="description">Executive Producer:</dt>
                                <dd>Howard Jacobs</dd>
                            <dt class="description">DIRECTOR:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">CREATIVE DIRECTOR:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Writer:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">DIRECTOR OF PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_imaranger01.jpg">
                            </a> <img src="images/thumbs/case_study_imaranger01.jpg" alt="New York Rangers"/>
                        </div>
                        <a href="promos/iam_a_ranger01/iam_a_ranger01.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>I am a Ranger</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Rangers</dd> 
                            <dt class="description">DIRECTOR/DP's:</dt>
                                <dd>Steve Cohen &amp; Christopher Bierlein</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Mark Valentine</dd>
                            <dt class="description">production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_lights_out.jpg">
                            <img src="images/thumbs/case_study_lights_out.jpg" alt="Lights Out"/></a>
                        </div>  
                        <a href="promos/lights_out/lights_out.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd> Lights Out</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>FX</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Ethan Wilson</dd>
                            <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd> 
                            <dt class="description">Production Company:</dt>
                                <dd>In a Garage</dd>
                            <dt class="description">production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-world-cup.jpg">
                            <img src="images/thumbs/case-study-world-cup.jpg" alt="2010 World Cup South Africa"/></a>
                        </div>
                        <a href="promos/espn_deportes/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>2010 World Cup South Africa</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>The Creative Group</dd>
                            <dt class="description">AGENCY:</dt>
                                <dd>ESPN Deportes</dd> 
                            <dt class="description">Director:</dt>
                                <dd>Heli Soto</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Guli Corradetti</dd>
                            <dt class="description">Producer:</dt>
                                <dd>Joe Franze</dd>
                            <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study  
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-damages-recap.jpg">
                            <img src="images/thumbs/case-study-damages-recap.jpg" alt="Damages Recap"/></a>
                        </div>
                        <a href="promos/damages-recap/video.php"></a> 
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Damages Recap</dd>
                            <dt class="description">Client:</dt> 
                                <dd>DirecTV</dd>
                            <dt class="description">PRODUCER:</dt>
                                <dd>Bart Peters</dd>
                            <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study  
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_knicks_david_lee.jpg">
                            <img src="images/thumbs/case_study_knicks_david_lee.jpg" alt="New York Knicks"/></a>
                        </div>
                        <a href="promos/david_lee/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>David Lee</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Knicks Marketing</dd>
                            <dt class="description">Creative Director:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">DIRECTOR/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Writer:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Editor:</dt>
                                <dd>Sam Neave &amp; Duncan Skiles</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                        <!-- case study                      <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_prayer.jpg">
                            <img src="images/thumbs/case_study_bobby_granger.jpg" alt="New York Rangers"/></a>
                        </div>
                        <a href="promos/prayer/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>The Prayer</dd>
                            <dt class="description">CLIENT:</dt>
                                <dd>New York Rangers</dd>
                            <dt class="description">Executive Producer:</dt>
                                <dd>Jeannie Baumgartner</dd>
                            <dt class="description">Agency:</dt>
                                <dd>The Brooklyn Brothers</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li> 
                    <!-- case study  
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case_study_flat_tire.jpg">
                            <img src="images/thumbs/case_study_flat_tire.jpg" alt="Star Wars - Spike TV"/></a>
                        </div>
                        <a href="promos/flat_tire/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Star Wars - Revenge of the Sith</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd> Spike TV</dd>
                            <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-damages-redcarpet.jpg">
                            <img src="images/thumbs/case-study-damages-redcarpet.jpg" alt="Red Carpet"/></a>
                        </div>
                        <a href="promos/damages-redcarpet/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Damages - Red carpet</dd>
                            <dt class="description">Client:</dt> 
                                <dd>DirecTV</dd>
                                <dt class="description">DIRECTOR of PHOTOGRAPHY:</dt>
                                    <dd>Brent Ramsey</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>      
                    </li>  
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-bill-pidto.jpg">
                            <img src="images/thumbs/case-study-bill-pidto.jpg" alt="Bill Pidto"/></a>
                        </div>
                        <a href="promos/taxi-bill/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt> 
                                <dd>Bill Pidto "Not His Coffee"</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Agency:</dt>
                                <dd>Amalgamated</dd>
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd>Manhattan Place Entertainment</dd>
                        </dl>
                    </li>
                    <!-- case study 
                    <li>
                        <div>
                            <a class="gallery_overlay" href="images/case-study-noiinpen.jpg">
                            <img src="images/thumbs/case-study-noiinpen.jpg" alt="Al/Kelly 'No I in Pen'"/></a>
                        </div>
                        <a href="promos/taxi-kelly_ai/video.php"></a>
                        <dl>
                            <dt class="description">Title:</dt>
                                <dd>Al and Kelly -  No "I" In Pen</dd> 
                            <dt class="description">CLIENT:</dt>
                                <dd>MSG Media</dd> 
                            <dt class="description">Agency:</dt>
                                <dd>Amalgamated</dd> 
                            <dt class="description">Director/DP:</dt>
                                <dd>Steve Cohen</dd>
                            <dt class="description">Production Services:</dt>
                                <dd> Manhattan Place Entertainment</dd>
                        </dl>
                    </li>-->
                </ul>
                </div>              
                <div id="thumbs-fwd"><img src="assets/next_thumb.png" alt="forward button"/></div> 
                <div class="pagination"></div>            
                </div>
        </div>
        </div>    
    </div><!--end panel-->
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