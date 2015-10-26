<!-- name the template -->
<?php
    /*
    Template Name: Blog
    */
get_header(); ?>

<!-- div for the main content -->
<div class="content_blog">


<!-- start of the loop -->
<!-- wrap around a DIV if you are going to have multiple posts on a page - e.g. archive page -->

<?php $args = array (

'post_type' => '',

'posts_per_page' => '-1'

);

query_posts( $args );

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="blog-post">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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

<?php get_footer(); ?>