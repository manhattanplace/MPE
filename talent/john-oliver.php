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
<title>Talent - John Oliver</title>

<link rel="stylesheet" type="text/css" href="/css/styles.css" media="screen"/>    
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="_css/ie.css" media="screen"/>
<![endif]-->
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
        <li>John Oliver</li>
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
        <a href="#" class="anchor" name="michael">John Oliver</a>
    </h1>
        <p class="date">Producer</p>
        <hr/>
        <img class="float_left" src="/_img/talent-john-oliver.jpg" alt="John Oliver" width="250" />
        <p>A two-time Emmy award winner John Oliver is one of the most versatile and talented producers in the industry. His very impressive track record includes taking the lead role on commercials, episodic television, reality shows, sports profile pieces, and feature films.</p>
        <p>As an independent producer and director,  John has worked all over the world and has been a prolific content producer. Specializing in both long and short form he has produced feature profiles, teases, and full-on episodes for the NBC Olympics, World Championship Figure Skating, The Summer X-Games, The ESPY Awards, Monday Night Football, NBC Today Show, Wimbledon, Super Bowl XL, Depth chart, ESPN, ABC Sports, Lifetime Television, Red Line Films, NBC Universal, FOX Television, NBA Entertainment, NBC Sports, and Food Network.</p>
        <p>Prior to becoming an independent producer John was on staff at NBA Entertainment where he handled several marketing campaigns including Coca-Cola and McDonald's and produced syndicated content for the major television networks.</p>
        <p>John first came on the scene with Manhattan Place Entertainment back in 2007 when he was the lead producer on "The Speed Road Tour Challenge", a NASCAR reality series comprised of 13 half hour episodes.</p>
        <p>Since that time, his involvement in Manhattan Place Entertainment's productions has continued to grow, and Manhattan Place has flourished and expanded under John's leadership skills and creativity.</p>
        <p>John is currently in charge of all branded content creation for MPE and has successfully produced web episodes and other digital content for clients such as Noise Digital (Intel Ultrabook), and Glam Media (Ford, Unilever, EBAY, Kohls, Macy's, US Cellular, and Glade).</p>
        <p>John is currently the Coordinating Producer and Head of Production at MPE  where he oversees the entire production staff, acts as the lead development person for content creation, and guides all of our production projects from creative through to final deliverables.</p>
        <p>He resides in Burlington Vermont with his wife and 2 children.</p>
        <a class="more" href="/about.php">Return to our About Page &raquo;</a>
</div>

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
