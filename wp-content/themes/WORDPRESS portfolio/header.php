<!DOCTYPE html>

<head>
   
<html lang=''>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
   
<meta name="viewport" content="width=device-width, initial-scale=1">
   
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script src="script.js"></script>

<title><?php bloginfo( 'DANNY MYERS' );?></title>
    
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>    
    
<link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" rel="stylesheet" />
  
<?php wp_head(); ?>
  
</head>

<!---------------------------------------------------------------------------------------------->
<!--BODY-->
<!---------------------------------------------------------------------------------------------->

<body>

<div class="container" align="center">

  		<div class="header" align="left">
      	
        <div class="logo">
      	
        	<h1><a href="#about">DANNY MYERS </a></h1>
        
        </div>
 
<!---------------------------------------------------------------------------------------------->
<!--NAV-->
<!---------------------------------------------------------------------------------------------->    

<div id="cssmenu">

	<div class="level1">

	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

    </div>

</div>
    
</div>   

</div>
