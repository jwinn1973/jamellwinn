<?php 
    $xml  = simplexml_load_file('../-data/contact_log.xml');
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
   		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../js/shadowbox-3.0.3/shadowbox.css" rel="stylesheet">
        <link href="../css/social-icons.css" type="text/css" rel="stylesheet">
    	<link href="../css/main.css" type="text/css" rel="stylesheet">
    	<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/jquery.contenthover.min.js"></script>
        <script type="application/javascript" src="../js/jQueryRotate.js"></script>
        <script type="application/javascript" src="../js/shadowbox-3.0.3/shadowbox.js"></script>
        <script type="text/javascript"> Shadowbox.init(); </script>
	</head>
    <body>
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
                                <li id="home_btn" class="active"><a href="../index.php" role="tab">HOME</a></li>
                                <li id="mocks_btn"><a href="../index.php" role="tab">MOCK-UPS</a></li>
                                <li id="graphics_btn"><a href="../index.php" role="tab">GRAPHICS</a></li>
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
                        foreach($xml ->contact as $contact){
                            $firstname = $contact ->firstname;
                            $lastname = $contact ->lastname;
                            $email = $contact ->email;
                    ?>
                    <div id = 'thankyou'>
                        <h4> THANK YOU <?php echo strtoupper($firstname) . " ". strtoupper($lastname); ?></h4>
                        <p>For taking the time to visit my site and your inquiry.</p>
                        <p>I will contacting you shortly at <?php echo $email; ?>.</p>
                      
                    </div>
                 <?php } ?>      
                 </article>
        
        </section><!-- END TAB CONTENT -->
            </div><!-- END CONTENT -->
        
        <div id="social-content">
            <section id="socialarea" class="container">
                <h3 class = "col-lg-12">Don't Forget To Add Me On Social Media Sites</h3>
                    <ul>
                        <li class="icon col-lg-3"><a href="https://www.facebook.com/jamell.winn" target="_blank">
                            <img src="../images/social-icons/facebook.png" alt="facebook icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="https://plus.google.com/111123961319267341179/about/p/pub" target="_blank">
                            <img src="../images/social-icons/google.png" alt="google plus icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="#" target="_blank">
                            <img src="../images/social-icons/linkedin.png" alt="linked-in icon"></a>
                        </li>
                        <li class="icon col-lg-3"><a href="#" target="_blank">
                            <img src="../images/social-icons/twiiter.png" alt="twitter icon"></a>
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
