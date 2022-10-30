<?php 
/*
Template Name: Contact us Page
*/
get_header();
$pgid=get_the_ID();
?>

      
        
         <!-- About-->
        <section class="page-section firstsection" id="contactpage">
            <div class="container">
                
               <div class="row contactinner">
                   <div class="col-lg-6 contactfirstblk">
                   <h4 class="contacttitle">Need To Get In Touch Quicker?</h4>
<!--<hr class="no_line" style="margin: 0 auto 5px;">-->

<p>Please send us an email to Info@trister.com </p>


<hr class="" style="margin: 0 auto 15px;">
                   </div>
                   <div class="col-lg-6">
                       <?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?>
                                    </div>
               </div>
            </div>
        </section>
<?php 
get_footer();
?>