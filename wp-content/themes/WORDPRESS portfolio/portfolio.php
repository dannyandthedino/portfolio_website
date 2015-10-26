<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header();?>
<div class="content_portfolio" align="center">
			<!-- LOOP FOR MAGIC FIELDS -->

                <?php $args = array (

                'post_type' => 'mf_portfolio',

                'posts_per_page' => '-1'

                );

                query_posts( $args );

                ?>

                

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                

                <a href="<?php echo get('portfolio_item');  ?>" rel="group" title="<?php echo get('portfolio_title'); ?>">

                <?php echo get_image ('portfolio_item_thumb') ; ?></a>

                

                

                <!-- END LOOP and MOVE NEXT IF NO POSTS-->

                <?php endwhile; else :  ?>

                <h1>Sorry...</h1>

                <p><img src="http://placehold.it/900x500"></p>

                <p>There seems to be a probelm with the site. There's nothing here right now.</p>

                <?php endif; ?>
             </div>
             <!--end index start footer-->
             <?php get_footer();?>


