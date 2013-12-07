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
<title>Talent - Jon Belinkski</title>

<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>    
</head>
<body>
    <?php include '../_header.php'; ?>

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
        <li><a href="/index.php">home</a> </li>
        <li>&raquo;</li>
        <li><a href="/about.php">about</a> </li>
        <li>&raquo;</li>
        <li>steve cohen</li>
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
        <a href="behind_the_scenes/indy.php" class="anchor" name="jon">Jonathan Belinkski</a>
    </h1>
        <p class="date">Director - DP</p>
    <hr/>
    <img class="float_left" src="/_img/talent_jon_belinkski.jpg" alt="talent_jon_belinkski" width="250"  />
<p>Jonathan Belinski is an Emmy Award winning Director of Photography who has created moving images all over the world. A film graduate of New York University, his career behind the camera began while still in college, and he has since created an impressive body of work in both television and film.</p>
<p>For more than a decade, Belinski has worked on a wide variety of well known television shows featuring today's biggest stars.</p>
<p>His roster of commercial and music video work includes some of the most noted names in the industry. His sports features and show opens have been featured on such prestigious events as the Superbowl and the Daytona 500.</p>
<p>Jonathan's first love and true passion lies with feature film production. In 2002 he received rave reviews for his photography on the film "Genius". Of his work on "Genius", Variety Magazine wrote, "Jonathan Belinski's lensing never sacrifices spatial integrity to empty pictorialism."</p>        
<a class="more" href="/about.php">Return to our About Page &raquo;</a>    </div>
</div><!-- end container -->
</div><!--end panel-->
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
<script src="/js/jquery-1.7.1.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>
