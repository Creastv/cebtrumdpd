<?php
get_header();
while ( have_posts() ) : the_post(); 
    if (is_post_type('zespol')){
        get_template_part( 'template-parts/content/content-team' );
    } else {
        get_template_part( 'template-parts/content/content-single' );
    }
endwhile;
get_footer();