<?php 
    $xml  = simplexml_load_file('-data/site-info.xml');
    $xml2 = simplexml_load_file('-data/mock-ups.xml');
    $xml3 = simplexml_load_file('-data/graphic.xml'); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
   		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="js/shadowbox-3.0.3/shadowbox.css" rel="stylesheet">
        <link href="css/social-icons.css" type="text/css" rel="stylesheet">
    	<link href="css/main.css" type="text/css" rel="stylesheet">
    	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.contenthover.min.js"></script>
        <script type="application/javascript" src="js/jQueryRotate.js"></script>
        <script type="application/javascript" src="js/shadowbox-3.0.3/shadowbox.js"></script>
        <script type="text/javascript"> Shadowbox.init(); </script>
	</head>
    <body>
        <header>
            <nav id="topNav"> </nav>
                                
                <div id="carousel">
                        <div id="c-image" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img src="images/name_title.png"/>
                                </div>
                                    </div>
                <nav id="tabs" class="navbar" role="navigation">
                        <div class="container">
                            <ul class="nav navbar-nav" role="tablist">
                                <li id="home_btn" class="active"><a href="#home" role="tab" data-toggle="tab">HOME</a></li>
                                <li id="mocks_btn"><a href="#mocks" role="tab" data-toggle="tab">MOCK-UPS</a></li>
                                <li id="graphics_btn"><a href="#graphics" role="tab" data-toggle="tab">GRAPHICS</a></li>
					       </ul>
                    </div>
                </nav>
        </header>

	<div id="content" class="container">
<!-- Aside -->
        <aside class="col-lg-3 pull-right"> </aside><!-- End Aside --> 
            <section class="tab-content col-lg-9">
               
                <!-- Home -->
		          <article id="home" class="tab-pane active col-lg-12">
                    
                        <?php 
                            foreach($xml ->site as $site){
                                $name = $site ->site_name;
                                $image = $site ->site_image;
                                $caption = $site ->site_caption;
                                $category = $site ->site_category;
                                $id = $site ->site_id; 
                                $url = $site ->site_url;
                        ?>
                        <div class="site_display col-lg-6">
                            <p class="site_image col-lg-12"><a href="#"><img src="images/<?php echo $image; ?>" 
                                alt="a screenshot of <?php echo $name; ?>"></a></p>
                                    <div class="contenthover">
                                        <h4 class="col-lg-12"><?php echo $name; ?></h4>
                                            <p class="col-lg-12"><?php echo $caption; ?></p>
                                                <p class="content_btn col-lg-4 col-lg-offset-4"><a href="pages/site.php?<?php echo $id; ?>">Learn More</a></p>
                                                    <p class="col-lg-12"><a href="<?php echo $url ?>" target="_blank"><?php echo $url; ?></a></p>
                                                    </div>   
                                                        </div>
                                                            <?php }; ?>
                </article>
            <!-- MOCK-UPS -->
                <article id="mocks" class="tab-pane col-lg-12">
                    <h3 class="col-lg-12">Mock-Ups</h3>
                        <?php
                                foreach($xml2->mockup as $mockup){
                                    $mockid = $mockup ->id;
                                    $mockup_name = $mockup->name;
                                    $mockup_image = $mockup->image;
                                    $mock_category = $mockup ->mockup_category; 
                        ?>
	                <div class="mock_display col-lg-6">
                            <p class="mockup_image col-lg-12">
                                <a href="<?php echo $mockup_image; ?>" rel="shadowbox">
                                    <img src="<?php echo $mockup_image; ?>" alt="a screenshot of <?php echo $mockup_name; ?>"/>
                                        </p>
                                </div>       
                    <?php }; ?>
	           </article> <!-- END MOCK-UPS-->
            <!-- Graphics -->
                <article id="graphics" class="tab-pane col-lg-12">
                    <h3 class="col-lg-12">Graphics</h3>
                           <?php
                                foreach($xml3->graphic as $graphic){
                                    $graphics_id = $graphic ->graphic_id;
                                    $graphics_name = $graphic->graphic_name;
                                    $graphics_image = $graphic ->graphic_image;
                                    $graphics_category = $graphic ->graphic_category;                                 
                            ?>
                            <div class="graphics_display col-lg-4">
                                <p class="graphic_image col-lg-12">
                                    <a href="images/graphics/<?php echo $graphics_image; ?>" rel="shadowbox">
                                        <img src="images/graphics/<?php echo $graphics_image; ?>" alt="" /></p>
                                            </a>      
                                                </div>
                    <?php }; ?>
                </article>
        
        </section><!-- END TAB CONTENT -->
            </div><!-- END CONTENT -->
        
        <div id="social-content">
            <section id="socialarea" class="container">
                <h3 class = "col-lg-12">Don't Forget To Add Me On Social Media Sites</h3>
                    <ul>
                        <li class="icon col-lg-3"><a href="https://www.facebook.com/jamell.winn" target="_blank">
                            <img src="images/social-icons/facebook.png" alt="facebook icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="https://plus.google.com/111123961319267341179/about/p/pub" target="_blank">
                            <img src="images/social-icons/google.png" alt="google plus icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="#" target="_blank">
                            <img src="images/social-icons/linkedin.png" alt="linked-in icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="#" target="_blank">
                            <img src="images/social-icons/twiiter.png" alt="twitter icon"></a>
                        </li>
                    </ul>

            </section>
        </div>
        <footer> </footer>
<div class="modal fade" id="contactme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <?php include 'pages/contactme.php'; ?>
        </div>	
<script type="text/javascript" src="js/myscript.js"></script>
</body>
</html>
