<?php 
    $phone= get_post_meta($post->ID, 'phone', true);
    $email= get_post_meta($post->ID, 'email', true);
	$linkiedin = get_post_meta($post->ID, 'linkiedin', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
       <?php get_template_part( 'template-parts/header/site-title' ); ?>
    </header>
    <div class="container-fluid">
        <div class="entry-content enty-content--full enty-content---ext enty-content---img">
            <div class="wraper">
                <div class="col">
                    <div class="sticky">
                    <div class="img">
                        <div class="back">
                            <a onclick="history.back()" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="23.34" viewBox="0 0 24.743 23.34">
                                    <path d="M28.223,15.75H13.177l5.836-5.583a2.326,2.326,0,0,0,0-3.178,2.079,2.079,0,0,0-3.038,0L6.258,16.411a2.142,2.142,0,0,0-.633,1.575v.028a2.142,2.142,0,0,0,.633,1.575l9.71,9.422a2.079,2.079,0,0,0,3.037,0,2.326,2.326,0,0,0,0-3.178L13.17,20.25H28.216A2.2,2.2,0,0,0,30.368,18,2.178,2.178,0,0,0,28.223,15.75Z" transform="translate(-5.625 -6.33)"/>
                                </svg>
                                <span> Powrót</span>
                            </a>
                        </div>
                        <?php the_post_thumbnail(); ?>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <?php the_content(); ?>
                   <div class="team-contact">
                        <p>Kontakt:</p>
                        <?php if ($linkiedin) { ?>
                            <a class="team__linkiedin" href="<?php echo $linkiedin; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.68" height="14.679" viewBox="0 0 14.68 14.679">
                                <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M3.286,14.68H.242v-9.8H3.286ZM1.763,3.542A1.771,1.771,0,1,1,3.525,1.763,1.777,1.777,0,0,1,1.763,3.542ZM14.676,14.68H11.639V9.909c0-1.137-.023-2.6-1.582-2.6-1.582,0-1.825,1.235-1.825,2.513V14.68H5.192v-9.8H8.111V6.216h.043a3.2,3.2,0,0,1,2.88-1.583c3.08,0,3.646,2.028,3.646,4.663V14.68Z" transform="translate(0 0)" fill="#3497db"/>
                                </svg>
                            </a>
                        <?php } ?>
                        <?php if ($email) { ?>
                            <a class="team__linkiedin" href="mailto:<?php echo $email; ?>" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14">
                                <path id="Shape_21" data-name="Shape 21" d="M206.75,4156a1.752,1.752,0,0,1-1.75-1.75v-10.5a1.752,1.752,0,0,1,1.75-1.75h17.5a1.753,1.753,0,0,1,1.75,1.75v10.5a1.752,1.752,0,0,1-1.75,1.75Zm-.875-12.25v10.5a.876.876,0,0,0,.875.875h17.5a.876.876,0,0,0,.875-.875v-10.5a.876.876,0,0,0-.875-.875h-17.5A.876.876,0,0,0,205.875,4143.75Zm17.257,9.551-3.937-2.624a.438.438,0,1,1,.486-.728l3.937,2.624a.438.438,0,1,1-.486.728Zm-15.871-.121a.437.437,0,0,1,.121-.607l3.937-2.624a.437.437,0,1,1,.485.728l-3.937,2.624a.435.435,0,0,1-.606-.121Zm.563-6.875a.437.437,0,0,1,.476-.734l7.2,4.659,7.2-4.659a.437.437,0,1,1,.475.734l-7.675,4.967Z" transform="translate(-205 -4142)" fill="#3497db"/>
                                </svg>
                                 <?php echo $email; ?>
                            </a>
                        <?php } ?>
                        <?php if ($phone) { ?>
                            <a class="team__linkiedin" href="tel:<?php echo $phone; ?>" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.878" height="17.269" viewBox="0 0 16.878 17.269">
                                <path id="Shape_20" data-name="Shape 20" d="M212.02,4121.422c-3.363-3.438-4.069-6.113-4.069-7.751a4.4,4.4,0,0,1,1.1-3.1l.351-.358,3.677,3.75-.644.659a.528.528,0,0,0,0,.717l5.536,5.66a.492.492,0,0,0,.7,0l.643-.659,3.675,3.757-.351.358a4.419,4.419,0,0,1-3.084,1.122C217.766,4125.58,215.233,4124.707,212.02,4121.422Zm8.281-2.093.433-.441a1.464,1.464,0,0,1,2.1,0l1.572,1.607a1.582,1.582,0,0,1,0,2.15l-.43.443Zm-9.907-10.128.428-.442a1.465,1.465,0,0,1,2.1,0l1.572,1.607a1.583,1.583,0,0,1,0,2.149l-.434.441Z" transform="translate(-207.951 -4108.312)" fill="#3497db"/>
                                </svg>
                                <?php echo $phone; ?>
                            </a>
                        <?php } ?>
                   </div class="team-contact">
                    <?php edit_post_link(__('Edit')); ?>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/extras/offerts' ); ?>
    </div>
</article>