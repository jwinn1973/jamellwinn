<?php 

$xml = simplexml_load_file('../-data/site-info.xml');

$request_url=$_SERVER['REQUEST_URI'];
$rest = substr($request_url, -2);

foreach($xml->site as $site){
    if($site->site_id == $rest){
        $name = $site ->site_name;
        $image = $site ->site_image;
        $category = $site ->site_category;
        $caption = $site ->site_caption;
        $url = $site ->site_url;
    }

}
       

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
   		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/social-icons.css" type="text/css" rel="stylesheet">
    	<link href="../css/main.css" type="text/css" rel="stylesheet">
    	<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/jquery.contenthover.min.js"></script>
        <script type="application/javascript" src="../js/jQueryRotate.js"></script>
	</head>
    <body id="pages">
        <header>
            <nav id="topNav"> </nav>
                                
                <div id="carousel">
                        <div id="c-image" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="../images/name_title.png"/>
                                </div>
                                    </div>
                <nav id="tabs" class="navbar" role="navigation">
                        <div class="container">
                            <ul class="nav navbar-nav" role="tablist">
                                <li><a href="../index.php">HOME</a></li>
                                <li class="active"><a href="site.php?<?php echo $rest; ?>" role="tab"><?php echo strtoupper($name); ?></a></li>
					       </ul>
                    </div>
                </nav>
        </header>

	<div id="content" class="container">
        <aside class="col-lg-3 pull-right">
            <h2>Portfolio</h2>
                <hr>
                    <h4>Website Categories</h4>
                        <ul>
                            <li><a href="#">SCHOOL PROJECTS</a></li>
                            <li><a href="#">SINGLE-PAGE SITE</a></li>
                            <li><a href="#">WORD-PRESS THEMES</a></li>
                            <li><a href="#">TEMPLATES</a></li>
                            <li class="aside_btn"><a href="../-data/jamellwinnresume.pdf" download>DOWNLOAD MY RESUME</a></li>
                             <li><a id="contact" class="pull-right col-lg-12" href="#">CONTACT ME</a></li>
                        </ul>
        </aside>
        <section class="col-lg-9">
            <p class="col-lg-12"><img src="../images/<?php echo $image; ?>" alt=""/></p>
                <h2 class="col-lg-12"><?php echo strtoupper($name); ?></h2>
                    <h5 class="col-lg-12"><?php echo strtoupper($category); ?></h5>
                        <a href="<?php echo $url; ?>" target="_blank" class="col-lg-12"><?php echo $url; ?></a>
                        <hr>
        
        </section>
    </div><!-- END CONTENT -->
        
        <div id="social-content">
            <section id="socialarea" class="container">
                <h3 class = "col-lg-12">Don't Forget To Add Me On Social Media Sites</h3>
                    <ul>
                        <li class="icon col-lg-3"><a href="#"><img src="../images/social-icons/facebook.png" alt="facebook icon"></a></li>
                        <li class="icon col-lg-3"><a href="#"><img src="../images/social-icons/google.png" alt="google plus icon"></a></li>
                        <li class="icon col-lg-3"><a href="#"><img src="../images/social-icons/linkedin.png" alt="linked-in icon"></a></li>
                        <li class="icon col-lg-3"><a href="#"><img src="../images/social-icons/twiiter.png" alt="twitter icon"></a></li>
                    </ul>

            </section>
        </div>
        <footer> </footer>
<script type="text/javascript" src="../js/myscript.js"></script>
</body>
</html>
