<!DOCTYPE HTML>

<html>
	<head>
		<title><?php bloginfo( 'DANNY MYERS' );?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="/portfolio_website/wp-content/themes/portfolio/assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/portfolio_website/wp-content/themes/portfolio/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/portfolio_website/wp-content/themes/portfolio/assets/css/ie9.css" /><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
		<link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" rel="stylesheet" />

    
	
	
	
	<script type="text/javascript" language="javascript">
      $(document).ready(function() {
          // make sure that you are applying the function to the correct tag/class
        $('a.smooth').smoothScroll({
          offset: 	0, //default of 0 - change depending on navigation height negative number to move down
          speed:	600  //default of 400ms
        });
		
		// make the scrollup button appear
		$(window).scroll(function(){
            if ($(this).scrollTop() > 96) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 		//scroll all of the way to the top
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
		        
      });



<?php wp_head(); ?>
    </head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a class = "smooth" href="#banner" rel="m_PageScroll2id">DANNY MYERS</a></h1>
						<nav id="nav">
							<ul> 
								<li><a class= "smooth" href="#about" rel="m_PageScroll2id">ABOUT</a></li>
                				<li><a class= "smooth" href="#portfolio" rel="m_PageScroll2id">PORTFOLIO</a></li>
                				<li><a class= "smooth" href="#blog" rel="m_PageScroll2id">BLOG</a></li>
                				<li><a class= "smooth" href="#contact" rel="m_PageScroll2id">CONTACT</a></li>
							</ul>
						</nav>
					</header>
