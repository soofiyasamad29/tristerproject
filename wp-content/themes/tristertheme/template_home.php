<?php 
/*
Template Name: Home Page
*/
get_header();
$pgid=get_the_ID();
?>
 <section class="page-section" id="bannersection">
            <div class="container-fluid">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'banner_image',true),full)[0]; ?>" class="img-fluid" alt="Trister">
            </div>
        </section>
          <!-- Categories-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center cattitle"> 
                    <h2 class="section-heading  pdbtm-40 categtitle">Featured Categories</h2>
                    <div class="bottomline"></div>
                </div>
                <div class="row text-center categorysection">
                    <div class="col-md-4">
                     <div class="photoitem">
                       <a href="<?php echo get_post_meta($pgid,'product_category_item_url_1',true);?>">
                           <img class="img-fluid" src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'product_category_item_image_1',true),full)[0]; ?>" alt="heart health">
                           </a>
                       <div class="blueoverlay"></div>
                     </div>
                        <h4 class="my-3"><?php echo get_post_meta($pgid,'product_category_item_title_1',true);?></h4>
                        
                    </div>
                     <div class="col-md-4">
                     <div class="photoitem">
                       <a href="<?php echo get_post_meta($pgid,'product_category_item_url_2',true);?>">
                           <img class="img-fluid" src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'product_category_item_image_2',true),full)[0]; ?>" alt="heart health">
                           </a>
                       <div class="blueoverlay"></div>
                     </div>
                        <h4 class="my-3"><?php echo get_post_meta($pgid,'product_category_item_title_2',true);?></h4>
                        
                    </div>
                     <div class="col-md-4">
                     <div class="photoitem">
                       <a href="<?php echo get_post_meta($pgid,'product_category_item_url_3',true);?>">
                           <img class="img-fluid" src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'product_category_item_image_3',true),full)[0]; ?>" alt="heart health">
                           </a>
                       <div class="blueoverlay"></div>
                     </div>
                        <h4 class="my-3"><?php echo get_post_meta($pgid,'product_category_item_title_3',true);?></h4>
                        
                    </div>
                     
                  
          
                </div>
            </div>
        </section>
        
         <section class="videosec">
            <div class="videobg">
                <?php echo get_post_meta($pgid,'video_section',true) ?>
            <!--<video poster="" autoplay="true" loop="true" muted="muted"><source type="video/mp4" src="https://demo.dedote.com/trister/wp-content/uploads/2022/10/Trister_-Web_White-BG_-2416x567_7.mp4"></video>-->
                <div class="overlaybg"></div>
            </div>
        </section>
        
         <!-- About-->
        <section class="page-section aboutcont" id="about">
            <div class="container">
                
               <div class="row">
                   <div class="col-lg-6">
                    <img src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'about_us_image',true),full)[0]; ?>" class="img-fluid">
                   </div>
                   <div class="col-lg-6 aboutcontentside">
                       <?php    echo get_post_meta($pgid,'about_us_content',true);     ?>
                                    </div>
               </div>
            </div>
        </section>
<?php 
get_footer();
?>