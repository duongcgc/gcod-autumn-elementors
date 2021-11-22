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
   <?php if ($style_posts == '1' || $style_posts == '3') { ?>
      <div class="posts__module style-<?php echo $style_posts; ?>">
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-01.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-02.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-03.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-04.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-05.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-06.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
      </div>
   <?php } elseif ($style_posts == '2') { ?>
      <div class="slick-slider posts-slider posts__module style-<?php echo $style_posts; ?>">
         <div class="item">
            <div class="post">
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
               </div>
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-01.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
                  <div class="post-button is-style-outline">
                     <a href="#" title="" class="btn wp-block-button__link">View post <i class="fal fa-arrow-right icon"></i></a>

                     <div class="post-share">
                        <label>Share</label>
                        <ul>
                           <li>
                              <a href="#" title=""><i class="fab fa-facebook icon"></i></a>
                           </li>
                           <li>
                              <a href="#" title=""><i class="fab fa-twitter icon"></i></a>
                           </li>
                           <li>
                              <a href="#" title=""><i class="fab fa-instagram icon"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
         <div class="item">
            <div class="post">
               <div class="content">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">The unseen of spending three years at Pixelgrade</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
               </div>
               <div class="image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/post-02.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
               <div class="content">
                  <div class="post-infor">
                     <p>This is a sticky post. There are a few things to verify: The sticky post should be distinctly ...</p>
                  </div>
                  <div class="post-button is-style-outline">
                     <a href="#" title="" class="btn wp-block-button__link">View post <i class="fal fa-arrow-right icon"></i></a>

                     <div class="post-share">
                        <label>Share</label>
                        <ul>
                           <li>
                              <a href="#" title=""><i class="fab fa-facebook icon"></i></a>
                           </li>
                           <li>
                              <a href="#" title=""><i class="fab fa-twitter icon"></i></a>
                           </li>
                           <li>
                              <a href="#" title=""><i class="fab fa-instagram icon"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div> <!-- end item -->
      </div>
   <?php } ?>
</div>