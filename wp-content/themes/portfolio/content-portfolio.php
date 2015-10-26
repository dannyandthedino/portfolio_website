


<div class="single_wrap">



			<div class="image_left">
            
            
<?php

$numberImages = 10;
// Maximum of 10 images

$fieldName = 'image_full_';
// The constant part of the field name (at the start of each field name)

for ( $i = 1; $i <= $numberImages; $i++ ) {
  // This creates a variable (i) with an initial value of 1.
  // The value can never go above our "numberImages" which we declared above.
  // Each time the code below is completed, 1 gets added to i ($i++ is shorthand for $i + 1)

  if ( get( $fieldName . $i ) ) {
    // We've asked for the "fieldName" and added (.) the current value of "i" to the end, so "image_full_1", then "image_full_2", etc as long as the loop runs.
    // If that field exists, do stuff:

    echo "<li>";

    echo get_image( $fieldName . $i );

    echo "</li>";

  } //endif

} //endfor

?>
  

</div>


               
             

            
            
            
            
           
            
            <div class="right">
            <h1><?php single_post_title( ' ' ); ?></h1>
            <p><?php echo get('description'); ?></p>

			
</div>


</div>












