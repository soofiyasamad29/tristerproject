<?php 
/*
Template Name: About Us Page
*/
get_header();
$pgid=get_the_ID();
?>
 <section class="page-section" id="bannersection">
            <div class="container-fluid">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($pgid,'banner_image',true),full)[0]; ?>" class="img-fluid" alt="Trister">
            </div>
        </section>

       
        
         <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                
               <div class="row">
                <div class="col-lg-3 "></div>
                   <div class="col-lg-6 aboutpagecontent">
                       <?php    echo get_post_meta($pgid,'about_us_content',true);     ?>
                                    </div>
                                    <div class="col-lg-3 "></div>
               </div>
            </div>
        </section>
<?php 
get_footer();
?>