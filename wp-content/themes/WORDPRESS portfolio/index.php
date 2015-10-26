<?php get_header(); ?>

<div class="content_blog" align="center">

    <!-- start of the loop -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!--  page or post title -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
		<?php endwhile; else : ?>
 
        <h1>Not Found</h1>
        <p>Sorry but you haven't posted anything, silly!</p>
        <?php endif;?>
    <!-- real end of the loop -->

<div class="back">
<a href="<?php print $_SERVER['HTTP_REFERER'];?>">Back to the Blog</a>
</div>
</div>
<!--End of Article-->
</div>



<?php get_footer(); ?>