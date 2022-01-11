<?php 

global $post;

 if (get_locale() == 'pl_PL') { $displaySec  = get_theme_mod( 'd-offert-sec_pl' ); } else { $displaySec  = get_theme_mod( 'd-offert-sec_en' ); }
 if (get_locale() == 'pl_PL') { $title  = get_theme_mod( 'title_pl' ); } else { $title  = get_theme_mod( 'title_en' ); }
 if (get_locale() == 'pl_PL') { $desc   = get_theme_mod( 'desc_pl' ); } else { $desc   = get_theme_mod( 'desc_en' ); }

 $offerts = new WP_Query( array(
    'post_type' => 'oferta',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'post__not_in' => array($post->ID),
));
?>
<?php if($displaySec) { ?>
<section class=" offert-com" >
    <div class="offert-com__wraper">
        <div class="col">
            <div class="offert-com__content">
                <?php if($title) { ?>
                <h2 class="offert-com__content--title"><?php echo $title; ?></h2>
                <?php } ?>
                <?php if($desc) { ?>
                <p><?php echo $desc; ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="col">
            <div class="offert-com-slider">
                <!-- Swiper -->
                <div class="swiper offert">
                    <div class="swiper-wrapper">
                        <?php while ( $offerts->have_posts() ) : $offerts->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="item-offert">
                                <a href="<?php the_permalink(); ?>">
                                   <?php the_post_thumbnail(); ?>
                                   <h3> <?php the_title(); ?></h3>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="arrows">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offert-space"><div class="offert-space__wraper"></div></div>
</section>
<?php } ?>