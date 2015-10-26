<?php get_header(); ?>
				
                
                <!-- Banner -->
					<section id="banner">

    					<h1>DANNY MYERS</h1>
						
                        <img src="/portfolio_website/wp-content/themes/portfolio/images/Scroll_Down.png" class="img-responsive center-block separator" alt="separator" align="center" width="170" height="40" />
                        
    				</section>

				<!-- One -->
					<section id="about" class="wrapper style69 special" >
						<div class="image">
                                <img class="img-responsive center-block separator" src="/portfolio_website/wp-content/themes/portfolio/images/ABOUT_ME_BANNER.png" height="400" width="1905" /></div>
                        <div class="inner">
							<!--<header class="major">
								<!--<h2>About Me</h2>-->
                                
                                <!--</header>
                                <!--<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/me.jpg" alt"" height="500px" width="500px" /></div>-->
                                <p>Hi, my name is Danny Myers. Currently, I am a junior pursuing a BFA for Graphic Design at the Myers School of Art at the University of Akron. I am also 
                                currently an intern with <a href="http://www.brittyndewerth.com/">Brittyn Dewerth </a>at <a href="http://www.typetwentyseven.com/">Type Twenty Seven.</a>
                            	 Typography is a passion of mine, as well as anything design related.</p>
							
						</div>
					</section>






<!-- Two -->
					<section id="portfolio" class="wrapper style69 special">
						<div class="image">
                                <img class="stretchbanner" src="/portfolio_website/wp-content/themes/portfolio/images/WORK_BANNER.png" height="400" width="1905" /></div>
                        <div class="inner">
							<section class="spotlight">
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic2.jpg" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic01" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic2.jpg" alt="" /></div>
                        </section>
							 
						
						<section class="spotlight">
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic03.jpg" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic01.jpg" alt="" /></div>
                            <div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic03.jpg" alt="" /></div>
                        </section>
                       
						<section class="spotlight">
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic03.jpg" alt="" /></div>
							<div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic01.jpg" alt="" /></div>
                            <div class="image"><img src="/portfolio_website/wp-content/themes/portfolio/images/pic03.jpg" alt="" /></div>
                        </section>
                        	
					</section>



<!-- Three -->
					<section id="blog" class="wrapper style3 special">
						<div class="image">
                                <img class="stretchbanner" src="/portfolio_website/wp-content/themes/portfolio/images/BLOG_BANNER.png" height="400" width="1905" /></div>
                        <div class="inner">
							
							<ul class="features">
								<li class="icon fa-paper-plane-o">
									
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

</div>	
							</ul>
						</div>
					</section>

				
                    
                    
                    
                    <!--
                    <section id="contact" class="wrapper style2 special">
									<h2>CONTACT ME</h2>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="NAME" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="EMAIL" />
											</div>
											<div class="12u$">
												<textarea name="demo-message" id="demo-message" placeholder="ENTER YOUR MESSAGE" rows="6"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="special" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>-->
                                
                                
                                
                                
   <!-- Contact Section
   ================================================== -->
   <section id="contact">
<div class="image">
             <img class="stretchbanner" src="/portfolio_website/wp-content/themes/portfolio/images/CONTACT_BANNER.png" height="400" width="1905" /></div>

         <div class="row section-head">

            <div class="two columns header-col">

               

            </div>

            <div class="ten columns">
				
                 

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form>  
               <div id="message-warning"> Error boy</div>
               
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>

<!--CUT HERE!!!-->









           <!-- <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   Jonathan Doe<br>
						   1600 Amphitheatre Parkway <br>
						   Mountain View, CA 94043 US<br>
						   <span>(123) 456-7890</span>
					   </p>

				   </div>

               <div class="widget widget_tweets">

                  <h4 class="widget-title">Latest Tweets</h4>

                  <ul id="twitter">
                     <li>
                        <span>
                        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">2 Days Ago</a></b>
                     </li>
                     <li>
                        <span>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi
                        <a href="#">http://t.co/CGIrdxIlI3</a>
                        </span>
                        <b><a href="#">3 Days Ago</a></b>
                     </li>
                  </ul>

		         </div>

            </aside>-->

      </div>

   </section> <!-- Contact Section End-->
                                
                                
<!--<div class="image">
                                <img class="stretchbanner" src="/portfolio_website/wp-content/themes/portfolio/images/CONTACT_BANNER.png" height="400" width="1905" /></div>
                                
             <div id="contact_container">
    
    
    
    <div id="contact_left" style="text-align: left;">
        <div class="text">
            <subtitle2>LIKE WHAT YOU SEE?</subtitle2>
            <p></p>
            <p>Discover what Danny Myers can do for you and your unique design needs. Contact me today and we’ll get the ball rolling on your next project!</p>
            <p></p>
        </div>
        <div class="iconwrap">
            <div class="fb">
                <a href="http://www.facebook.com/alexandersomoskey" target="blank"><img src="http://somoskey.com/wp-content/uploads/2015/02/fb.png" width="100%" height="100%">
                </a>
            </div>
            <div class="tw">
                <a href="http://twitter.com/asomoskey" target="blank"><img src="http://somoskey.com/wp-content/uploads/2015/02/tw.png" width="100%" height="100%">
                </a>
            </div>
            <div class="in">
                <a href="http://www.linkedin.com/pub/alexander-somoskey/7b/817/842" target="blank"><img src="http://somoskey.com/wp-content/uploads/2015/02/li.png" width="100%" height="100%">
                </a>
            </div>
            <div class="resume">
                <a href="http://somoskey.com/wp-content/uploads/2015/03/somoskey_resume.pdf" target="blank"><img src="http://somoskey.com/wp-content/uploads/2015/02/resume.png" width="100%" height="100%">
                </a>
            </div>
        </div>
    </div>
    <div id="contact_right">
        <iframe src="http://www.vcita.com/widgets/contact_form/eb1ebfe0?ver=2" width="100%" height="500" scrolling="no" frameborder="0" style=" ">
           
        </iframe>
    </div>
</div>-->
                                
                                
                                
                                

    

    

       



    
                                
                                
                                
<?php get_footer(); ?>