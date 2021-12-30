 <?php
  if (get_locale() == 'pl_PL') {  $copyLeft   =  get_theme_mod('copyright-left'); } else {  $copyLeft   =  get_theme_mod('copyright-left-en');}
  if (get_locale() == 'pl_PL') {  $copyRight  =  get_theme_mod('copyright-right'); } else {  $copyRight  =  get_theme_mod('copyright-right-en');}
 ?>
 <div id="info">
     <div class="col">
         <?php if ($copyLeft) { ?>
         <p><?php echo $copyLeft; ?> <?php echo date("Y"); ?>   </p>
         <?php } ?>
     </div>
     <div class="col">
         <?php if ($copyRight) { ?>
          <p> <?php echo $copyRight; ?></p>
         <?php } ?>
     </div>
 </div>