<?php get_header(); ?>




               
    	
<!--ABOUT PAGE
---------------------------------------------------------------------------------->

   
    <div class="page" id="about">
    	<!-- the content for the section goes in here -->
   	  <div class="article">
        	<h1>ABOUT ME</h1>
            <p>Hi, my name is Danny Myers. Currently, I am a junior pursuing a BFA for Graphic Design at the Myers School of Art at the University of Akron. I am also 
             currently an intern with <a href="http://www.brittyndewerth.com/">Brittyn Dewerth </a>at <a href="http://www.typetwentyseven.com/">Type Twenty Seven.</a>Typography 
             is a passion of mine, as well as anything design related.</p>
        <!-- /article -->
    	</div>
    <!-- /section -->
    </div>
    

    
    
    
    
    
    
    
    
    
    
<!--PORTFOLIO PAGE
---------------------------------------------------------------------------------->
    
    
    
    
    					<div class="page" id="portfolio">
						<div class="image">
                        <div class="inner">
                        <header class="major">
								<h1>PORTFOLIO</h1>
								</header>
							<section class="spotlight">
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic2.jpg" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic01" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic2.jpg" alt="" /></div>
                        	<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic01" alt="" /></div>
                        </section>
							 
						
							<section class="spotlight">
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic2.jpg" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic01" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic2.jpg" alt="" /></div>
                        	<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/img/pic01" alt="" /></div>
                        </section>
                        	
					</section>

    
    
    
<!--BLOG PAGE
---------------------------------------------------------------------------------->
    
    
    <div class="section_blog" id="blog">
    	<div class="article">
        	<h1>BLOG</h1>
            <?php $args = array (

'post_type' => '',

'posts_per_page' => '3'

);

query_posts( $args );

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-post">
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <h5 class="post_date"><?php echo get_the_date()?></h5>
    <?php the_excerpt();?>
    <h6 class="read-more"><a href="<?php the_permalink(); ?>">Continue Reading</a></h6>
</div>

<?php endwhile; else : ?>
    <!-- end the loop -->
    <!-- OOPS - you don't have any posts -->
    <h1>Not Found</h1>
    <p>Sorry but you didn't put any posts!</p>
<?php endif;?>
    <!-- real end of the loop -->
        <!-- /article -->
    	</div>
    <!-- /section -->
    </div>
    
    
    
    
    
    
<!--CONTACT ME PAGE
---------------------------------------------------------------------------------->
    
    <div class="section_contact" id="contact">
    	<div class="article">
        	<h1>CONTACT ME</h1>
                <section id="contact">
  
<div class="cfcontainer">

<form name="htmlform" method="post" action="toyousender.php">

<input type="text" name="first_name" placeholder="NAME" required>
  
<input  type="email" name="email" placeholder="MAIL" required>
  
<textarea name="comments" placeholder="MESSAGE" required ></textarea>
  
<button name="send" type="submit" class="submit">SEND</button>
  
</form>
 
  </div>
  </section>

        
    	</div>
    


    <!-- /section -->
    </div>
    

<!-- /container div -->
</div>

<?php get_footer(); ?>