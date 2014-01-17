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
<title>Talent - Christopher Bierlein</title>

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
            <li>steve cohen</li>
        </ul>   
    
        <ul id="nav_tertiary">
            <h3 class="dp">Talent List</h3> 
            <li><a href="steve_cohen.php">Steve Cohen</a></li>
            <li><a href="christopher_bierlein.php">Christopher Bierlein</a></li>
            <li><a href="axel_baumann.php">Axel Baumann</a></li>
        </ul>   
    
    <div class="article">
    <h1>
            <a href="behind_the_scenes/indy.php" class="anchor" name="chris">Christopher Bierlein</a>
        </h1>
            <p class="date">Director - DP</p>
        <hr />
    <img class="float_left" src="/_img/talent_christopher_bierlein.jpg" alt="talent_christopher_bierlein" width="150"  />
    <p>Since shifting into moving images from still photography in the early '90s, Chris has worked around the world, shooting everything from commercials and music videos to documentaries and web content, shorts and art films.</p>
    <p>Chris has worked with all major formats in film, video and stills. Some of the recent new technology in which he is skilled includes the RED camera, the Canon 5D (stills and moving image), and the Panasonic P2 range.</p>     <a class="more" href="/about.php">Return to our About Page &raquo;</a>    </div>
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