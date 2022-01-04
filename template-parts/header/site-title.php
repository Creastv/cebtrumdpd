<div class="container-fluid">
    <h1 class="entry-title">
     <?php if ( is_category() ) :
        single_cat_title();	
        					
		elseif (is_single()) :
			the_title();

		elseif (is_page() ) :
			the_title();

		elseif ( is_tag() ) :
			single_tag_title();

		elseif ( is_author() ) :
			the_post();
			printf( __( 'Author: %s', 'cr' ), '<span class="vcard">' . get_the_author() . '</span>' );
			rewind_posts();

		elseif ( is_day() ) :
			printf( __( 'Day: %s', 'cr' ), '<span>' . get_the_date() . '</span>' );

		elseif ( is_month() ) :
			printf( __( 'Month: %s', 'cr' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

		elseif ( is_year() ) :
			printf( __( 'Year: %s', 'cr' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			_e( 'Asides', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			_e( 'Images', 'cr');

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			_e( 'Videos', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
			_e( 'Quotes', 'cr' );

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
			_e( 'Links', 'cr' );
		else :
			_e( 'Strefa wiedzy', 'cr' );
		endif; ?>
    </h1>
	<?php if (is_post_type('zespol')){
		$position = get_post_meta($post->ID, 'position', true);
		$linkiedin = get_post_meta($post->ID, 'linkiedin', true);
	?>
	<div class="team-info">
	    <?php if ($linkiedin) { ?>
			<a class="team__linkiedin" href="<?php echo $linkiedin; ?>" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" width="14.68" height="14.679" viewBox="0 0 14.68 14.679">
				<path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M3.286,14.68H.242v-9.8H3.286ZM1.763,3.542A1.771,1.771,0,1,1,3.525,1.763,1.777,1.777,0,0,1,1.763,3.542ZM14.676,14.68H11.639V9.909c0-1.137-.023-2.6-1.582-2.6-1.582,0-1.825,1.235-1.825,2.513V14.68H5.192v-9.8H8.111V6.216h.043a3.2,3.2,0,0,1,2.88-1.583c3.08,0,3.646,2.028,3.646,4.663V14.68Z" transform="translate(0 0)" fill="#3497db"/>
				</svg>
			</a>
		<?php } ?>
		<?php if ($position) { ?>
			<p class="team__pos"> <?php echo $position; ?> </p>
		<?php } ?>
	</div>
	<?php } ?>
    <svg class="ornament-title" xmlns="http://www.w3.org/2000/svg" width="214" height="11.207" viewBox="0 0 214 11.207"> <g id="Arrow-_left" data-name="Arrow- left" transform="translate(0 0.5)"> <path id="Shape_14_copy" data-name="Shape 14 copy" d="M159,240h14.726l9.485,10,10.517-10H373" transform="translate(-159 -240)" fill="none" stroke="#3497db" stroke-width="1" opacity="0.2"/></g></svg>
    <?php if ( function_exists('yoast_breadcrumb') ) { ?>
    <?php  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
    <?php } ?>
</div>
<div class="space-bg"><div class="wraper"><div class="col"></div><div class="col"><img  src="<?php echo get_template_directory_uri(); ?>/src/img/img-title.png" alt="Centrum Dobrej Parktyki Dystrybucyjnej"></div></div>