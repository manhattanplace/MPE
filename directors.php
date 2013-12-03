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
<title>Manhattan Place Entertainment</title>
<link rel="shortcut icon" href="favicon.ico" >
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
<link rel="stylesheet" type="text/css" href="_css/main.css" media="screen"/>
<script src="js/modernizr.2.0.6.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<!-- place javascript in scripts.js -->
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
            	<a href="index.html">
            	<h1>Manhattan Place Entertainment - Video and Film Production Services</h1>
            	</a>
            </div>
            <h3 class="library" style="color:#576db2">DIRECTORS</h3>
            <ul class="the-directors">
                <li>
                    <a href="directors/barry-boss.php" title="Barry Bross">
                        <img src="images/directors/barry.jpg"  alt="Barry Bross" />
                        <p style="color:#576db2" class="director-name">Barry Bross</p>
                        <p class="director-title">Director/Creative Director</p>
                    </a>
                </li>
                <li>
                    <a href="directors/joe-chapura.php" title="Joe Chapura">
                        <img src="images/directors/joe.jpg"   alt="Joe Chapura" />
                        <p style="color:#576db2" class="director-name">Joe Chapura</p>
                        <p class="director-title">Director/DP</p>
                    </a>
                </li>
                <li>
                    <a  href="directors/avi-cohen.php" title="Avi Cohen">
                        <img src="images/directors/avi.jpg" alt="Avi Cohen"  />
                        <p style="color:#576db2" class="director-name">Avi Cohen</p>
                        <p>Director/DP</p>
                    </a>
                </li>
                <li>
                    <a  href="directors/steve-cohen.php" title="Steve Cohen">
                        <img src="images/directors/steve.jpg" alt="Steve Cohen"  />
                        <p style="color:#576db2" class="director-name">Steve Cohen</p>
                        <p class="director-title">Director/DP</p>
                    </a>
                </li>
                <li>
                    <a  href="directors/evan-langely-laffin.php" title="Evan Langely Laffin">
                        <img src="images/directors/evan.jpg" alt="Evan Langely Laffin" />
                        <p style="color:#576db2" class="director-name">Evan Langely Laffin</p>
                        <p class="director-title">Director/VFX</p>
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
