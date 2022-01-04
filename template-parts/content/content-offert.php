<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       <?php get_template_part( 'template-parts/header/site-title' ); ?>
    </header>
    <div class="entry-content enty-content--full enty-content---ext enty-content---icon">
        <div class="wraper">
            <div class="col">
                <div class="sticky">
                <div class="img">
                <?php the_post_thumbnail(); ?>
                </div>
                </div>
            </div>
            <div class="col">
                <?php the_content(); ?>
                <?php edit_post_link(__('Edit')); ?>
            </div>
        </div>
    </div>
</article>