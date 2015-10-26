<?php
/*
Template Name: About
*/
?>

<?php get_header();?>



   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/profilepic.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Jonathan Doe</span><br>
						   <span>1600 Amphitheatre Parkway<br>
						         Mountain View, CA 94043 US
                     </span><br>
						   <span>(123)456-7890</span><br>
                     <span>anyone@website.com</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->
   
   
   
   
<section id="about" >
			<div class="placeholderimage">
            <img src="http://placehold.it/500x600">
            </div>
            
            <div class="about_body">
            
			<?php query_posts('category_name=about');?>
                <!--loop starts here-->
    <!-- start of the loop -->
    
    <?php $args = array (

'post_type' => 'about',

'posts_per_page' => '-1'

);

query_posts( $args );

?>

    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--  page or post title -->
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
 
        <h1>Not Found</h1>
        <p>Sorry but you haven't posted anything, silly!</p>
        <?php endif;?>
        </div>
        
    <!-- real end of the loop -->
</div>

<!--End of Article-->

<?php get_footer(); ?>





