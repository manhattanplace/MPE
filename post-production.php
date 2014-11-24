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
<title>Manhattan Place Entertainment - Post Produciton</title>
<link rel="shortcut icon" href="favicon.ico" >
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<!-- place javascript in scripts.js -->
</head>
<body>
<?php include '_header.php'; ?>	<div class="panel">
            <div id="logo">
            	<a href="index.php">
            	<h1>Manhattan Place Entertainment - Video and Film Production Services</h1>
            	</a>
            </div>
            <h3 class="library" style="color:#576db2">POST PRODUCTION</h3>
            <ul class="the-directors">
                <li>
                    <a href="post-production/short-form.php" title="Short Form">
                        <img class="short-form" src="/post-production/images/nba-topical.jpg"  alt="Short Form" />
                        <p style="color:#576db2" class="director-name">Short Form</p>
                    </a>
                </li>
                <li>
                    <a  href="post-production/long-form.php" title="Long Form">
                        <img src="/post-production/images/dark-light.jpg" alt="Long Form"/>
                        <p style="color:#576db2" class="director-name">Long Form</p>
                    </a>
                </li>
                <li>
                    <a  href="post-production/design.php" title="Design">
                        <img src="/post-production/images/college-hoops-st-johns.jpg" alt="Design"  />
                        <p style="color:#576db2" class="director-name">Design</p>
                    </a>
                </li>
                <li>
                    <a  href="post-production/visual-effects.php" title="Visual Effects">
                        <img src="/directors/images/oblivion.jpg" alt="Visual Effects" />
                        <p style="color:#576db2" class="director-name">Visual Effects</p>
                    </a>
                </li>
                <li>
                    <a  href="post-production/music.php" title="MUSIC">
                        <img src="/post-production/images/jordyn-mallory-prayers.jpg" alt="MUSIC" />
                        <p style="color:#576db2" class="director-name">Music</p>
                    </a>
                </li>
            </ul>
    </div>
    <!--end panel-->
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
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
