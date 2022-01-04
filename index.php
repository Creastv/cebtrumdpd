<?php get_header(); ?>
<article>
    <header class="entry-header">
       <?php get_template_part( 'template-parts/header/site-title' ); ?>
    </header>
    <div class="page-content-index container-fluid">
        <div class="page-main-content">
            <div class="wraper-posts">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content/content' );?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <h1 class="text-center">Nic nie znaleziono</h1>
                <?php endif; ?>
            </div>
            <?php if(paginate_links()) { ?>
            <div class="pagin">
                <?php pagination_bars(); ?>
            </div>
            <?php } ?>
        </div>
        <aside class="page-sidebar" >
            <div class="sticky-sidebar">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; ?>
            </div>
        </aside>
    </div>
</article>
<?php get_footer(); ?>