<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly 
?>

<?php if ($custom_text) { ?>
   <div class="header__module">
      <h3 class="title">
         <?php if ($url_text) { ?>
            <a href="<?php echo $url_text; ?>" title="">
         <?php } else { ?>
            <span>
         <?php } ?>
            <?php echo $custom_text; ?>
         <?php if ($url_text) { ?>
            </a>
         <?php } else { ?>
            </span>
         <?php } ?>
      </h3>
      <?php if ($infor_text) { ?>
         <p class="infor"><?php echo $infor_text; ?></p>
      <?php } ?>
   </div>
<?php } ?>

<div class="content__module">
   <div class="slick-slider categories-slider categories__module">
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-01.jpg'; ?>" alt="Life style" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Life style
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-02.jpg'; ?>" alt="Photo" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Photo
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-03.jpg'; ?>" alt="Food" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Food
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-04.jpg'; ?>" alt="Natural" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Natural
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-01.jpg'; ?>" alt="Life style" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Life style
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-02.jpg'; ?>" alt="Photo" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Photo
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-03.jpg'; ?>" alt="Food" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Food
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="category">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/cat-04.jpg'; ?>" alt="Natural" />
               </a>
            </div>
            <div class="content">
               <h4 class="categoty-name">
                  <a href="#" title="">
                     Natural
                  </a>
               </h4>
            </div>
         </div>
      </div> <!-- end item -->
   </div>
</div>