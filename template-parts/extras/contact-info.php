<?php
 if (get_locale() == 'pl_PL') { $d_sm_header  = get_theme_mod( 'd_sm_header' ); } else { $d_sm_header  = get_theme_mod( 'd_sm_header_en' ); }
// Contact
 if (get_locale() == 'pl_PL') { $email  = get_theme_mod( 'email_hd' ); } else { $email  = get_theme_mod( 'email_hd_en' ); }
 if (get_locale() == 'pl_PL') { $email_url  = get_theme_mod( 'email_url_hd' ); } else { $email_url  = get_theme_mod( 'email_url_en' ); }
 if (get_locale() == 'pl_PL') { $phone  = get_theme_mod( 'phone_hd' ); } else { $phone  = get_theme_mod( 'phone_hd_en' ); }
 if (get_locale() == 'pl_PL') { $phone_url  = get_theme_mod( 'phone_url_hd' ); } else { $phone_url  = get_theme_mod( 'phone_url_en' ); }

//  Social media
 if (get_locale() == 'pl_PL') { $linkiedin  = get_theme_mod( 'linkiedin' ); } else { $linkiedin  = get_theme_mod( 'linkiedin_en' ); }
 if (get_locale() == 'pl_PL') { $facebook  = get_theme_mod( 'facebook' ); } else { $facebook  = get_theme_mod( 'facebook_en' ); }
 if (get_locale() == 'pl_PL') { $twitter  = get_theme_mod( 'twitter' ); } else { $twitter  = get_theme_mod( 'twitter_en' ); }
 if (get_locale() == 'pl_PL') { $instagram  = get_theme_mod( 'instagram' ); } else { $instagram  = get_theme_mod( 'instagram_en' ); }
 if (get_locale() == 'pl_PL') { $pinterest  = get_theme_mod( 'pinterest' ); } else { $pinterest  = get_theme_mod( 'pinterest_en' ); }
 if (get_locale() == 'pl_PL') { $youtube  = get_theme_mod( 'youtube' ); } else { $youtube  = get_theme_mod( 'youtube_en' ); }
?>
<div class="contact-info">
  <div class="wraper">
       <?php if ($d_sm_header) { ?> 
       <div class="social-media-vertical">
       <ul>
              <?php if ($linkiedin) { ?>
              <li><a href="<?php echo $linkiedin; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="14.68" height="14.679" viewBox="0 0 14.68 14.679">
              <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M3.286,14.68H.242v-9.8H3.286ZM1.763,3.542A1.771,1.771,0,1,1,3.525,1.763,1.777,1.777,0,0,1,1.763,3.542ZM14.676,14.68H11.639V9.909c0-1.137-.023-2.6-1.582-2.6-1.582,0-1.825,1.235-1.825,2.513V14.68H5.192v-9.8H8.111V6.216h.043a3.2,3.2,0,0,1,2.88-1.583c3.08,0,3.646,2.028,3.646,4.663V14.68Z" transform="translate(0 0)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
              <?php if ($facebook) { ?>
              <li><a href="<?php echo $facebook; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="7.862" height="14.679" viewBox="0 0 7.862 14.679">
              <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M8.956,8.257,9.364,5.6H6.815V3.877a1.328,1.328,0,0,1,1.5-1.435H9.471V.179A14.132,14.132,0,0,0,7.414,0,3.243,3.243,0,0,0,3.943,3.576V5.6H1.609V8.257H3.943v6.422H6.815V8.257Z" transform="translate(-1.609)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
              <?php if ($twitter) { ?>
              <li><a href="<?php echo $twitter; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="18.074" height="14.679" viewBox="0 0 18.074 14.679">
              <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M16.216,7.039c.011.161.011.321.011.482A10.467,10.467,0,0,1,5.688,18.06,10.468,10.468,0,0,1,0,16.4a7.663,7.663,0,0,0,.895.046,7.418,7.418,0,0,0,4.6-1.583A3.711,3.711,0,0,1,2.03,12.291a4.671,4.671,0,0,0,.7.057,3.918,3.918,0,0,0,.975-.126A3.7,3.7,0,0,1,.734,8.587V8.541a3.73,3.73,0,0,0,1.674.47A3.71,3.71,0,0,1,1.261,4.057,10.529,10.529,0,0,0,8.9,7.934a4.182,4.182,0,0,1-.092-.849,3.708,3.708,0,0,1,6.411-2.534,7.293,7.293,0,0,0,2.351-.895A3.694,3.694,0,0,1,15.941,5.7a7.426,7.426,0,0,0,2.133-.573,7.963,7.963,0,0,1-1.858,1.915Z" transform="translate(0 -3.381)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
              <?php if ($instagram) { ?>
              <li><a href="<?php echo $instagram; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="14.683" height="14.679" viewBox="0 0 14.683 14.679">
              <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M7.338,5.814A3.764,3.764,0,1,0,11.1,9.577,3.758,3.758,0,0,0,7.338,5.814Zm0,6.21A2.447,2.447,0,1,1,9.784,9.577,2.451,2.451,0,0,1,7.338,12.024Zm4.8-6.364a.878.878,0,1,1-.878-.878A.876.876,0,0,1,12.133,5.66Zm2.493.891A4.344,4.344,0,0,0,13.44,3.475a4.373,4.373,0,0,0-3.076-1.186c-1.212-.069-4.845-.069-6.056,0A4.367,4.367,0,0,0,1.232,3.472,4.358,4.358,0,0,0,.046,6.547c-.069,1.212-.069,4.845,0,6.056A4.344,4.344,0,0,0,1.232,15.68a4.378,4.378,0,0,0,3.076,1.186c1.212.069,4.845.069,6.056,0A4.344,4.344,0,0,0,13.44,15.68,4.373,4.373,0,0,0,14.626,12.6c.069-1.212.069-4.841,0-6.053ZM13.06,13.9a2.477,2.477,0,0,1-1.4,1.4,16.178,16.178,0,0,1-4.327.295A16.3,16.3,0,0,1,3.011,15.3a2.477,2.477,0,0,1-1.4-1.4A16.178,16.178,0,0,1,1.32,9.577,16.3,16.3,0,0,1,1.615,5.25a2.477,2.477,0,0,1,1.4-1.4A16.178,16.178,0,0,1,7.338,3.56a16.3,16.3,0,0,1,4.327.295,2.477,2.477,0,0,1,1.4,1.4,16.178,16.178,0,0,1,.295,4.327A16.168,16.168,0,0,1,13.06,13.9Z" transform="translate(0.005 -2.238)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
              <?php if ($pinterest) { ?>
              <li><a href="<?php echo $pinterest; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="11.294" height="14.679" viewBox="0 0 11.294 14.679">
              <path id="Icon_awesome-pinterest-p" data-name="Icon awesome-pinterest-p" d="M6,.457c-3.018,0-6,2.012-6,5.267C0,7.8,1.165,8.971,1.871,8.971c.291,0,.459-.812.459-1.041,0-.274-.7-.856-.7-1.994A3.975,3.975,0,0,1,5.762,1.9c2,0,3.485,1.138,3.485,3.229,0,1.562-.626,4.491-2.656,4.491A1.306,1.306,0,0,1,5.232,8.327c0-1.112.776-2.188.776-3.335,0-1.947-2.762-1.594-2.762.759a3.455,3.455,0,0,0,.282,1.491,32.194,32.194,0,0,0-1.235,6.15c0,.556.079,1.1.132,1.659.1.112.05.1.2.044,1.482-2.029,1.429-2.426,2.1-5.082a2.385,2.385,0,0,0,2.038,1.059c3.123,0,4.526-3.044,4.526-5.788C11.294,2.363,8.77.457,6,.457Z" transform="translate(0 -0.457)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
              <?php if ($youtube) { ?>
              <li><a href="<?php echo $youtube; ?>" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="19.568" height="14.679" viewBox="0 0 19.568 14.679">
              <path id="Icon_ionic-logo-youtube" data-name="Icon ionic-logo-youtube" d="M19.441,7.741a2.971,2.971,0,0,0-2.829-3.1c-2.118-.1-4.277-.138-6.483-.138H9.441c-2.2,0-4.365.038-6.483.138A2.978,2.978,0,0,0,.134,7.749C.038,9.11,0,10.471,0,11.832s.038,2.722.13,4.086a2.981,2.981,0,0,0,2.825,3.115c2.225.1,4.507.149,6.827.145s4.6-.038,6.827-.145a2.982,2.982,0,0,0,2.829-3.115c.092-1.365.134-2.725.13-4.09S19.533,9.106,19.441,7.741ZM7.912,15.581V8.07l5.543,3.754Z" transform="translate(0 -4.5)" fill="#3497db"/>
              </svg>
              </a></li>
              <?php } ?>
       </ul>
       </div>
       <?php } ?>
       <div class="brand-inf-hd">
       <ul>
              <?php if ($email) { ?>
              <li>
                     <?php if ($email_url) { ?>
                     <a href="<?php echo $pinterest; ?>" target="_blank">
                     <?php } ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14">
                            <path id="Shape_21" data-name="Shape 21" d="M206.75,4156a1.752,1.752,0,0,1-1.75-1.75v-10.5a1.752,1.752,0,0,1,1.75-1.75h17.5a1.753,1.753,0,0,1,1.75,1.75v10.5a1.752,1.752,0,0,1-1.75,1.75Zm-.875-12.25v10.5a.876.876,0,0,0,.875.875h17.5a.876.876,0,0,0,.875-.875v-10.5a.876.876,0,0,0-.875-.875h-17.5A.876.876,0,0,0,205.875,4143.75Zm17.257,9.551-3.937-2.624a.438.438,0,1,1,.486-.728l3.937,2.624a.438.438,0,1,1-.486.728Zm-15.871-.121a.437.437,0,0,1,.121-.607l3.937-2.624a.437.437,0,1,1,.485.728l-3.937,2.624a.435.435,0,0,1-.606-.121Zm.563-6.875a.437.437,0,0,1,.476-.734l7.2,4.659,7.2-4.659a.437.437,0,1,1,.475.734l-7.675,4.967Z" transform="translate(-205 -4142)" fill="#3497db"/>
                            </svg>
                            <span><?php echo $email; ?></span>
                     <?php if ($email_url) { ?>
                     </a>
                     <?php } ?>
              </li>
              <?php } ?>
              <?php if ($phone) { ?>
              <li>
                     <?php if ($phone_url) { ?>
                     <a href="<?php echo $pinterest; ?>" target="_blank">
                     <?php } ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.878" height="17.269" viewBox="0 0 16.878 17.269">
                            <path id="Shape_20" data-name="Shape 20" d="M212.02,4121.422c-3.363-3.438-4.069-6.113-4.069-7.751a4.4,4.4,0,0,1,1.1-3.1l.351-.358,3.677,3.75-.644.659a.528.528,0,0,0,0,.717l5.536,5.66a.492.492,0,0,0,.7,0l.643-.659,3.675,3.757-.351.358a4.419,4.419,0,0,1-3.084,1.122C217.766,4125.58,215.233,4124.707,212.02,4121.422Zm8.281-2.093.433-.441a1.464,1.464,0,0,1,2.1,0l1.572,1.607a1.582,1.582,0,0,1,0,2.15l-.43.443Zm-9.907-10.128.428-.442a1.465,1.465,0,0,1,2.1,0l1.572,1.607a1.583,1.583,0,0,1,0,2.149l-.434.441Z" transform="translate(-207.951 -4108.312)" fill="#3497db"/>
                            </svg> 
                            <span><?php echo $phone; ?></span>
                     <?php if ($phone_url) { ?>
                     </a>
                     <?php } ?>
              </li>
              <?php } ?>        
       </ul>
       </div>
  </div>
</div>