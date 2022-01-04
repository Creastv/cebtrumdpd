<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header">
         <?php get_template_part( 'template-parts/header/site-title' ); ?>
    </header>
    <?php endif; ?>
    <div class="entry-content container-fluid">
        <?php the_content(); ?>
        <?php edit_post_link(__('Edit')); ?>
    </div>
</article>