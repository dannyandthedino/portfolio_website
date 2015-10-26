<?php  get_header(); ?>

<?php

while ( have_posts() ) : the_post();

  if ( in_category('portfolio') ) {

    get_template_part( 'content', 'portfolio' );

  } elseif ( in_category('blog') ) {

    get_template_part( 'content', 'blog' );

  } else {

    get_template_part( 'content' );

  } 

endwhile; // end of the loop.

?>

<?php get_footer(); ?>