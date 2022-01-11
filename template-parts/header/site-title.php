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
		$phone= get_post_meta($post->ID, 'phone', true);
        $email= get_post_meta($post->ID, 'email', true);
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
	<div class="team-info-contact">
	    <?php if ($email) { ?>
        <a class="team__email" href="mailto:<?php echo $email; ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14">
            <path id="Shape_21" data-name="Shape 21" d="M206.75,4156a1.752,1.752,0,0,1-1.75-1.75v-10.5a1.752,1.752,0,0,1,1.75-1.75h17.5a1.753,1.753,0,0,1,1.75,1.75v10.5a1.752,1.752,0,0,1-1.75,1.75Zm-.875-12.25v10.5a.876.876,0,0,0,.875.875h17.5a.876.876,0,0,0,.875-.875v-10.5a.876.876,0,0,0-.875-.875h-17.5A.876.876,0,0,0,205.875,4143.75Zm17.257,9.551-3.937-2.624a.438.438,0,1,1,.486-.728l3.937,2.624a.438.438,0,1,1-.486.728Zm-15.871-.121a.437.437,0,0,1,.121-.607l3.937-2.624a.437.437,0,1,1,.485.728l-3.937,2.624a.435.435,0,0,1-.606-.121Zm.563-6.875a.437.437,0,0,1,.476-.734l7.2,4.659,7.2-4.659a.437.437,0,1,1,.475.734l-7.675,4.967Z" transform="translate(-205 -4142)" fill="#3497db"/>
            </svg>
            <span><?php echo $email; ?></span>
        </a>
        <?php } ?>

        <?php if ($phone) { ?>
        <a class="team__phone" href="tel:<?php echo $phone; ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="16.878" height="17.269" viewBox="0 0 16.878 17.269">
            <path id="Shape_20" data-name="Shape 20" d="M212.02,4121.422c-3.363-3.438-4.069-6.113-4.069-7.751a4.4,4.4,0,0,1,1.1-3.1l.351-.358,3.677,3.75-.644.659a.528.528,0,0,0,0,.717l5.536,5.66a.492.492,0,0,0,.7,0l.643-.659,3.675,3.757-.351.358a4.419,4.419,0,0,1-3.084,1.122C217.766,4125.58,215.233,4124.707,212.02,4121.422Zm8.281-2.093.433-.441a1.464,1.464,0,0,1,2.1,0l1.572,1.607a1.582,1.582,0,0,1,0,2.15l-.43.443Zm-9.907-10.128.428-.442a1.465,1.465,0,0,1,2.1,0l1.572,1.607a1.583,1.583,0,0,1,0,2.149l-.434.441Z" transform="translate(-207.951 -4108.312)" fill="#3497db"/>
            </svg>
           <span> <?php echo $phone; ?></span>
        </a>
        <?php } ?>
		</div>
	<?php } ?>
    <svg class="ornament-title" xmlns="http://www.w3.org/2000/svg" width="214" height="11.207" viewBox="0 0 214 11.207"> <g id="Arrow-_left" data-name="Arrow- left" transform="translate(0 0.5)"> <path id="Shape_14_copy" data-name="Shape 14 copy" d="M159,240h14.726l9.485,10,10.517-10H373" transform="translate(-159 -240)" fill="none" stroke="#3497db" stroke-width="1" opacity="0.2"/></g></svg>
    <?php if ( function_exists('yoast_breadcrumb') ) { ?>
    <?php  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
    <?php } ?>
</div>
<div class="space-bg"><div class="wraper"><div class="col"></div><div class="col"><img  src="<?php echo get_template_directory_uri(); ?>/src/img/img-title.png" alt="Centrum Dobrej Parktyki Dystrybucyjnej"></div></div>