<?php
get_header();
while ( have_posts() ) : the_post(); 
    if (is_post_type('zespol')){
        get_template_part( 'template-parts/content/content-team' );
    } elseif (is_post_type('oferta')){
        get_template_part( 'template-parts/content/content-offert' );
    } elseif (is_post_type('referencje')){
        get_template_part( 'template-parts/content/content-referencje' );
    } else { ?>
        <article>
            <header class="entry-header">
            <?php get_template_part( 'template-parts/header/site-title' ); ?>
            </header>
            <div class="page-content-index container-fluid">
                <div class="page-main-content">
                    <div class="wraper-posts">
                        <?php get_template_part( 'template-parts/content/content-single' );?>
                    </div>
                </div>
                <aside class="page-sidebar" >
                    <div class="sticky-sidebar">
                        <?php do_action( 'before_sidebar' ); ?>
                        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; ?>
                    </div>
                </aside>
            </div>
        </article>
  <?php  }
endwhile;
get_footer();