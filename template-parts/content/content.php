<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_singular() ) : ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php else : ?>
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <?php endif; ?>
        <?php if ( function_exists('yoast_breadcrumb') ) { ?>
        <?php  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
        <?php } ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>