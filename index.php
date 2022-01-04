<?php get_header(); ?>
<article>
    <header class="entry-header">
        <h1 class="entry-title"> Strefa wiedzy </h1>
        <svg class="ornament-title" xmlns="http://www.w3.org/2000/svg" width="214" height="11.207" viewBox="0 0 214 11.207"> <g id="Arrow-_left" data-name="Arrow- left" transform="translate(0 0.5)"> <path id="Shape_14_copy" data-name="Shape 14 copy" d="M159,240h14.726l9.485,10,10.517-10H373" transform="translate(-159 -240)" fill="none" stroke="#3497db" stroke-width="1" opacity="0.2"/></g></svg>
        <div class="img">
             <img  src="<?php echo get_template_directory_uri(); ?>/src/img/img-title.png" alt="">
        </div>
        <?php if ( function_exists('yoast_breadcrumb') ) { ?>
        <?php  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
        <?php } ?>
        <div class="space-bg"><div class="wraper"><div class="col"></div><div class="col"></div></div>
    </header>
    <div class="page-content-index">
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
            <div class="wraper-sidebar">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?><?php endif; ?>
            </div>
        </aside>
    </div>
</article>
<?php get_footer(); ?>