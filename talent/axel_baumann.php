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
<title>Talent - Axel Baumann</title>

<link rel="stylesheet" type="text/css" href="../_css/main.css" media="screen"/>    
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
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

<div class="panel ">
<div class="section">

<div id="logo">
	<a href="index.php">
	<h1>Manhattan Place Entertainment - Video and Film Production Services</h1>
	</a>
</div>
<h3 class="library">TALENT</h3>
</div><!-- end .section -->
	
<div class="wrapper">
	<ul class="bread_crumb">
		<li><a href="../index.php">home</a> </li>
		<li>&raquo;</li>
		<li><a href="../about.php">about</a> </li>
		<li>&raquo;</li>
		<li>axel baumann</li>
	</ul>	

	<ul id="nav_tertiary">
		<h3 class="dp">Talent List</h3> 
		<li><a href="steve_cohen.php">Steve Cohen</a></li>
		<li><a href="michael-mccarthy.php">Michael McCarthy</a></li>
		<li><a href="john-oliver.php">John Oliver</a></li>
		<li><a href="christopher_bierlein.php">Christopher Bierlein</a></li>
		<li><a href="axel_baumann.php">Axel Baumann</a></li>
	</ul>	

<div class="article">
<h1>
		<a href="behind_the_scenes/indy.php" class="anchor" name="axel">Axel Baumann</a>
	</h1>
		<p class="date">Director - DP</p>
	<hr/>
	<img class="float_left" src="../_img/talent_axel_baumann.jpg" alt="talent_axel_baumann" width="250"  />
<p>Axel Baumann began his career as a cinematographer in 1997 when he shot his first feature film, Creation, directed by Thomas Roth.</p>
<p>Since then he has shot five feature films as well as numerous documentaries for National Geographic, Discovery Channel, The History Channel, The Sundance Channel, PBS, A&E, as well as commercials for Adidas, G.E., Execjets, Sony, IBM and Allstate.</p>
<p>In 2005, Axel received his first Emmy nomination for Liberia: An Uncivil War, directed by Jonathan Stack and broadcasted on Discovery/Times.</p>
<p>In 2008 Axel was awarded an Emmy for Carrier, a 10-part series for PBS on the aircraft carrier USS Nimitz, produced by Icon Films and directed by Maro Chermayeff.</p>
<p>Recently Axel completed cinematography on Herb and Dorothy, the audience award winner at Silverdocs released by Arthouse Films, as well as a biography on Thomas Jefferson for the History Channel. His most recent project is War against War, a film on UN Peacekeeping directed by Oscar winner Fisher Stevens. Axel also teaches cinematography at the School of Visual Arts's Master's program in Social Documentary Filmmaking.</p>
<a class="more" href="../about.php">Return to our About Page &raquo;</a>	</div>
</div><!-- end container -->
</div><!--end panel-->
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
<!-- Google Analytics -->
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
