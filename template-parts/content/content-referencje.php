<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       <?php get_template_part( 'template-parts/header/site-title' ); ?>
    </header>
    <div class="container-fluid">
        <div class="entry-content enty-content--full enty-content---ext enty-content---icon">
            <div class="wraper">
                <div class="col">
                    <div class="sticky">
                        <aside >
                            <div class="back">
                                <a onclick="history.back()" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="23.34" viewBox="0 0 24.743 23.34">
                                        <path d="M28.223,15.75H13.177l5.836-5.583a2.326,2.326,0,0,0,0-3.178,2.079,2.079,0,0,0-3.038,0L6.258,16.411a2.142,2.142,0,0,0-.633,1.575v.028a2.142,2.142,0,0,0,.633,1.575l9.71,9.422a2.079,2.079,0,0,0,3.037,0,2.326,2.326,0,0,0,0-3.178L13.17,20.25H28.216A2.2,2.2,0,0,0,30.368,18,2.178,2.178,0,0,0,28.223,15.75Z" transform="translate(-5.625 -6.33)"/>
                                    </svg>
                                    <span> Powrót</span>
                                </a>
                            </div>
                            <?php the_post_thumbnail(); ?>

                        </aside>
                    </div>
                </div>
                <div class="col">
                    <?php the_content(); ?>
                    <?php
                    $file = get_field('add_pdf');
                    if($file) { ?> 
                    <br>
                    <a href="<?php echo  $file['url'] ?>" class="btn btn-main" target="_blank"><?php echo __( 'Pobierz PDF', 'crea' ); ?></a>
                    <?php } ?>
                    <?php edit_post_link(__('Edit')); ?>
                </div>
            </div>
        </div>
        <br>
        <?php get_template_part( 'template-parts/extras/offerts' ); ?>
    </div>
</article>