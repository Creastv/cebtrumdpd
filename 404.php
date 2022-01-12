<?php get_header(); ?>
<div id="error" class="">
    <div class="row">
        <div class="col text-center">
            <h1>404</h1>
            <a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo __( 'Wróć do strony głównej', 'crea' ); ?>
            </a> 
        </div>
    </div>
</div>

<?php get_footer(); ?>