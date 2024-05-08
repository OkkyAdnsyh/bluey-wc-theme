<?php
/**
 * page default
 */
get_header( 'shop' );
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    the_content();
    endwhile; else: ?>

<p>Sorry, no posts matched your criteria.</p>
<?php 
endif; 
get_footer( 'shop' );
?>