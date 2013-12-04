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
		<li>ali hashemi</li>
	</ul>	

	<ul id="nav_tertiary">
		<h3 class="dp">Talent List</h3> 
		<li><a href="steve_cohen.php">Steve Cohen</a></li>
		<li><a href="christopher_bierlein.php">Christopher Bierlein</a></li>
		<li><a href="jon_belinkski.php">Jonathan Belinkski</a></li>
		<li><a href="axel_baumann.php">Axel Baumann</a></li>
		<li><a href="ali_hashemi.php">Ali Hashemi</a></li>
	</ul>	


<div class="article">
<h1>
		<a href="behind_the_scenes/indy.php" class="anchor" name="ali">Ali Hashemi</a>
	</h1>
		<p class="date">Director - DP</p>
	<hr/>
<img class="float_left" src="../_img/talent_ali_hashemi_producer.jpg" alt="talent_axel_baumann"  />
<p>A graduate of NYU’s Film & Television program, Ali Hashemi's extensive experience as a multi-platform producer has enabled him to manage and create inventive imagery for countless film and video productions.</p> <p>Over the past 15 years, he has developed, directed, and supervised commercial shoots, animated sizzles, broadcast programming and broadband content for clients and brands such as HBO, ABC, AOL, Disney, Electronic Arts, Spike TV, the MSG Network, Sony Entertainment, VH1, Dannon Yogurt, Rite Aid, the New York Knicks and the New York Rangers.</p> <p>Ali has built a reputation as a cool and collected producer, determined to deliver high-quality productions on-time and on-budget.</p> <p>Whether it's casting or a thousand details throughout production and post, he is all about creative possibility and the pragmatic ways to make it happen.</p>


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
