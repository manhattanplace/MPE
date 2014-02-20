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
<title>Teases Video Library</title>
<meta name="description" content="video">
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
        <h3 class="library">TEASES</h3>
        <div class="container">
             <div class="wt-gallery">
                  <div class="main-screen">
                    <img id="bg-img" src="assets/spacer.png"/>
                    <a href="#"><img id="main-img" src="images/case_study_lombardi.jpg"/></a>
                    <img src="assets/prev.png" id="prev-btn"/>
                    <img src="assets/next.png" id="next-btn"/>
                    <div class="desc"></div>
                    <div class="tmp-desc"></div>
                    <div class="info-pane">--&nbsp;/&nbsp;--</div>
                        <div class="preloader"><img src="assets/loader.gif"/></div>
                </div>                
                 <div class="c-panel">
                    <div id="thumbs-back"><img src="assets/prev_thumb.png"/></div>
                    <div class="thumbnails">
                      <ul>
            <!-- case study  -->
                        <li>
                            <div>
                                <a class="gallery_overlay" href="images/opens/fox-superbowl.jpg">
                                   <img src="images/opens/fox-superbowl-thumb.jpg" alt="Give My Regards to Broadway" ></a>
                              </div>
                               <a href="http://vimeo.com/86432448"></a>
                           <p>
                                <span>Superbowl XLVIII Pre Game Show Open</span> <br />
                                <span>FOX NFL Sunday</span> <br />
                                <span class="description">TITLE:</span> Give My Regards to Broadway<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Bernie Kim<br/>
                                <span class="description">DIRECTOR/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>
                        </li>
            <!-- case study  -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_lombardi.jpg">
                                 </a><img src="images/thumbs/case_study_lombardi.jpg" alt="Lombardi"/>
                             </div>
                           <a href="teases/lombardi-superbowl-xlv/video.php"></a>
                           <p>
                                <span class="description">TITLE:</span> Super Bowl XLV-"Lombardi"<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Sabrina Lakhani<br/>
                                <span class="description">DIRECTOR/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                                <br/>
                                <span class="description ">Awards:<br/></span> 2011 Telly Award:<br/> Best Sports Segment<br/>
                            </p>
                         </li>
            <!-- case study  -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study-journey-2.jpg">
                                      </a><img src="images/thumbs/case_study-journey-2.jpg" alt="Journey 9-11"/>
                                </div>
                                 <a href="teases/journey-911/video.php"></a>
                            <p>
                                <span class="description">Title</span> "The Journey <span style="text-transform:none;">for</span> Our Heroes" <br/>Remembering  9/11<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Dan Masi<br/>
                                <span class="description">Director/DP:</span> Steve Cohen <br/> 
                                <span class="description">Production Services:</span><br/> Manhattan Place Entertainment<br/>
                            </p>
                         </li>
            <!-- case study  -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case-study-michael-douglas.jpg">
                                      </a><img src="images/thumbs/case-study-michael-douglas.jpg" alt="The Journey to Super Bowl XLV"/>
                                </div>
                                 <a href="teases/journey-superbowl-xlv/video.php"></a>
                            <p>
                                <span class="description">Title</span> "The Journey to Super Bowl XLV"<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Sabrina Lakhani<br/>
                                <span class="description">Director/DP:</span> Steve Cohen <br/> 
                                <span class="description">Production Services:</span><br/> Manhattan Place Entertainment<br/>
                            </p>
                         </li>
            <!-- case study  -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_yankee_stadium_tribute.jpg">
                                 </a><img src="images/thumbs/case_study_yankee_stadium_tribute.jpg" alt="2008 MLB All-Star Game"/>
                             </div>
                           <a href="teases/yankee_allstar_tribute/video.php"></a> 
                           <p>
                                <span class="description">Title:</span> 2008 MLB All-Star Game - <br/> 
                                Yankee Stadium Tribute<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Michael Hughes<br/>
                                <span class="description">Director/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:
                                <br/></span> Manhattan Place Entertainment<br/>
                            </p>
                         </li>
            <!-- case study -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_superbowl_xlii.jpg">
                                 </a><img src="images/thumbs/case_study_superbowl_xlii.jpg" alt="NY Giants "Resiliency""/>
                             </div>  
                             <a href="teases/giants_superbowl/video.php"></a>
                             <p>
                                <span class="description">Title:</span> Super Bowl XLII <br/>NY Giants "Resiliency"<br/> 
                                <span class="description">CLIENT:</span> FOX Sports<br/> 
                                <span class="description">Producer:</span> Derrick Manning<br/>
                                <span class="description">Director/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment
                            </p>      
                         </li>
            <!-- case study  -->
                         <li >
                             <div>
                                 <a class="gallery_overlay" href="images/case-study-tuskegee-airmen.jpg">
                                 </a><img src="images/thumbs/case-study-tuskegee-airmen.jpg" alt="Terrance Howard"/>
                             </div>
                           <a href="teases/airmen/video.php"></a>
                           <p>
                                <span class="description">TITLE:</span> The Tuskegee Airmen<br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">PRODUCER:</span> Joe Williams<br/>
                                <span class="description">DIRECTOR/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>
                         </li> 
            <!-- case study  -->
                         <li >
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_bcs_phantom2.jpg">
                                 </a><img src="images/thumbs/case_study_bcs_phantom.jpg" alt="2008 BCS Championship Game"/>
                             </div>
                           <a href="teases/bcs2008/video.php"></a>
                           <p>
                                <span class="description">TITLE:</span> 2008 BCS Championship Game <br/>
                                <span class="description">CLIENT:</span> FOX Sports<br/>
                                <span class="description">Producer:</span> Michael Hughes<br/>
                                <span class="description">Director of Photography:</span> <br/>Jon Belinski <br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>
                         </li>
            <!-- case study -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case-study-donald.jpg">
                                 </a><img src="images/thumbs/case-study-donald.jpg" alt="The Donald"/>
                             </div>
                                <a href="teases/donald/video.php"></a>
                            <p>
                                <span class="description">Title:</span> The Donald<br/> 
                                <span class="description">CLIENT:</span> FOX Sports<br/> 
                                <span class="description">Director/DP:</span> Brent Ramsey<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>      
                         </li>
            <!-- case study -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_bum_philips.jpg">
                                 </a><img src="images/thumbs/case_study_bum_philips.jpg" alt="Super Bowl XXXVIII"/>
                             </div>
                                <a href="teases/bum_phillips/video.php"></a>
                            <p>
                                <span class="description">Title:</span> Super Bowl XXXVIII<br/> 
                                <span class="description">CLIENT:</span> CBS Sports<br/> 
                                <span class="description">Producer:</span> Chris Svendsen<br/>
                                <span class="description">Director/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>      
                         </li>
            <!-- case study -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_openingday.jpg">
                                 </a><img src="images/thumbs/case_study_openingday.jpg" alt="Opening Day"/>
                             </div>
                             <a href="teases/opening_day/video.php"></a>
                             <p>
                                <span class="description">Title:</span> Opening Day<br/> 
                                <span class="description">CLIENT:</span> FOX Sports<br/> 
                                <span class="description">Producer:</span> Gary Lang<br/>
                                <span class="description">Director/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>      
                         </li>
            <!-- case study -->
                            <li>
                             <div>
                                 <a class="gallery_overlay" href="images/a-subway-series.jpg">
                                      </a><img src="images/thumbs/a-subway-series.jpg" alt="ESPN Sunday Night Baseball"/>
                                </div>
                                 <a href="teases/subway_series/video.php"></a>
                            <p>
                                <span class="description">Title:</span> ESPN Sunday Night Baseball <br/>"A Subway Series"<br/> 
                                <span class="description">CLIENT:</span> Bluefoot Entertainment<br/> 
                                <span class="description">Producer:</span> Tim Horgan<br/>
                                <span class="description">Director/DP:</span> Steve Cohen<br/>
                                <span class="description">Production Services:<br/></span> Manhattan Place Entertainment<br/>
                            </p>      
                         </li> 
            <!-- case study -->
                         <li>
                             <div>
                                 <a class="gallery_overlay" href="images/case_study_bcs_hawaii2.jpg">
                                      </a><img src="images/thumbs/case_study_bcs_hawaii.jpg" alt="Colt Brennan"/>                                                           
                                </div>
                                 <a href="teases/bcshawaii/video.php"></a>
                            <p>
                                <span class="description">Title:</span> Colt Brennan Profile<br/>                     
                                <span class="description">CLIENT:</span> FOX Sports <br/>
                                <span class="description">Producer:</span> Michael Hughes<br/>
                                <span class="description">DP/Director:</span> Jon Belinski<br/>
                                <span class="description">Production Services:</span><br/> Manhattan Place Entertainment<br/>
                            </p>       
                         </li>        
                      </ul>
                    </div>                 
                    <div id="thumbs-fwd"><img src="assets/next_thumb.png"/></div> 
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
    </footer><!-- end footer -->
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
<script src="js/jquery.wtgallery.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>