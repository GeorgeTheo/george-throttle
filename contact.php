<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>George Throttle Main Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link href="css/lightbox.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/main.js"></script>

    </head>
    
    <body>
        <header>
        
            <div id="logo" >         
                 <a href="index.html"> 
                    <img src="img/george_throttle_website_nav_logo.png"/>
                  </a>
            </div>
            
            <div class="menubutton">
                <span class="span1"></span>
                <span ></span>
                <span ></span>
            </div>

            <div id="menu">
                <div class="nav-one nav">NAVIGATION ONE</div>
                <div class="nav-two nav">NAVIGATION TWO</div>
                <div class="nav-three nav">NAVIGATION THREE</div> 
                <div class="nav-four nav">NAVIGATION FOUR</div>
                <div class="nav-five nav">
                    <a href="contact.php">CONTACT</a>
                </div>
           </div>
    
        </header>

             <div class="wrapper">
                <img id="bike" src="img/bike.png" alt="" />
                <div id="container-txt">
                    <div id="site-title">
                    <img id="title-image" src="img/title.png" alt="" /> 
                    </div>
                
            <img src="img/george_throttle_bike_motif.png" id="mobile-bike"> 
                         <div id="contact-form" class="clearfix">
                <h1>Get In Touch!</h1>
                <h2>details</h2>
                <?php
                //init variables
                $cf = array();
                $sr = false;
                 
                if(isset($_SESSION['cf_returndata'])){
                    $cf = $_SESSION['cf_returndata'];

                    //var_dump($cf);
                    $sr = true;
                }
                ?>
                <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                    <li id="info">There were some problems with your form submission:</li>
                    <?php 
                    if(isset($cf['errors']) && count($cf['errors']) > 0) :
                        foreach($cf['errors'] as $error) :
                    ?>
                    <li><?php echo $error ?></li>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
				<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p> 
                    <form method="post" action="process.php">
                    <label for="name">Name: <span class="required">*</span></label>
                    <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="George Throttle" required autofocus />
                     
                    <label for="email">Email Address: <span class="required">*</span></label>
                    <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="george_throttle@example.com" required />
                     
                    <label for="telephone">Telephone: </label>
                    <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                     
                     
                    <label for="message">Message: <span class="required">*</span></label>
                    <textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                     
                    <span id="loading"></span>
                    <input type="submit" value="Submit" id="submit-button" />
                    <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
                </form>
                  <?php unset($_SESSION['cf_returndata']); ?>
                </div>

                    <div id="fbbox" class="marginset">
                    <a href="http://facebook.com"> <img src="img/george_throttle_website_fb_icon.png"></div> </a>
                    <div id="twbox" class="marginset"> 
                    <a href="http://twitter.com"><img src="img/george_throttle_website_twitter_icon.png"></div></a>

                </div>

    </div> 
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/lightbox.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-53838449-1');ga('send','pageview');
        </script>
    </body>
</html>