<!doctype html>
<html>
<head>
	<!-- meta data for media queries -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /media query meta data -->
    <meta charset="UTF-8">
		<title><?php bloginfo( 'DANNY MYERS' );?></title>
    
    
    
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
	
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/portfolio_website/wp-content/themes/portfolio/js/jquery.smooth-scroll.js"></script>
    <!-- enable the smoothscroll - download zip at https://github.com/kswedberg/jquery-smooth-scroll/ -->
   
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
    </script> 
    
    <?php wp_head(); ?>
    
 

<!--<body class="container">

		 Page Wrapper 
			<div id="page-wrapper">

				 Header 
					<header id="header" class="alt">
						<h1><a class = "smooth" href="#home" rel="m_PageScroll2id">DANNY MYERS</a></h1>
						<nav id="nav">
							<ul> 
								<li><a class= "smooth" href="#about" rel="m_PageScroll2id">ABOUT</a></li>
                				<li><a class= "smooth" href="#portfolio" rel="m_PageScroll2id">PORTFOLIO</a></li>
                				<li><a class= "smooth" href="#blog" rel="m_PageScroll2id">BLOG</a></li>
                				<li><a class= "smooth" href="#contact" rel="m_PageScroll2id">CONTACT</a></li>
							</ul>
						</nav>
					</header>-->
                    
                    
                    
                    
                    
                    	<div class="container">
			
			
			
    <!-- if you want a "return to top" button, place it at the top of the container -->
<a href=""><div class="scrollup">Scrollup</div></a>
    

    
    <!-- create a "section" container for each "page" -->
    <!-- apply unique ID to the section or the article -->
    
      <div class="section_home" id="home">
			<!-- the content for the section goes in here -->
<p><button id="trigger-overlay" type="button"></button></p>
    					<h1>DANNY MYERS</h1>
						<a class= "smooth" href="#about" rel="m_PageScroll2id">
                        <img src="/portfolio_website/wp-content/themes/portfolio/img/Scroll_Down.png" class="img-responsive center-block separator" alt="separator" align="center" width="58" height="58" />
   						</a>
    <!-- /section -->
    </div>  
				
				
			
            
            
            
            
            
   
			
		</div><!-- /container -->
		<!-- open/close -->
		<div class="overlay overlay-hugeinc">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a class= "smooth" href="#about" rel="m_PageScroll2id">ABOUT</a></li>
                				<li><a class= "smooth" href="#portfolio" rel="m_PageScroll2id">PORTFOLIO</a></li>
                				<li><a class= "smooth" href="#blog" rel="m_PageScroll2id">BLOG</a></li>
                				<li><a class= "smooth" href="#contact" rel="m_PageScroll2id">CONTACT</a></li>
				</ul>
			</nav>
		</div>
                    
                  <script src="/portfolio_website/wp-content/themes/portfolio/js/modernizr.custom.js"></script>  
</head>
<body>

        
</div>
	</div>


















