<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Trister_Theme
 * @since Trister Theme 1.0
 */

?>
   <!-- Footer-->
        <footer class="footer">
            <div class="container">
              <div class="row footertopblock">
              <div class="col-lg-3 col-sm-6">
                <?php  dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
              <div class="col-lg-3 col-sm-6"> <?php  dynamic_sidebar( 'sidebar-2' ); ?></div>
              <div class="col-lg-3 col-sm-6"> <?php dynamic_sidebar( 'sidebar-3' ); ?></div>
              <div class="col-lg-3 col-sm-6"> <?php dynamic_sidebar( 'sidebar-4' ); ?></div>
              </div>  </div>
              <div class="copyrightsec"> 
              <div class="container ">
                <div class="row align-items-center footerbottomblock">
                    <div class="col-sm-6 text-lg-start"><p>© 2022 Trister.com. All Rights Reserved.</p></div>
                   
                    <div class="col-sm-6 text-lg-end">
                        <a class="bactotopicon" href="#!"><i class="fas fa-chevron-up"></i></a>
                        
                    </div>
                </div>
            </div>
            </div>
        </footer>
     
    
     

        <!-- Bootstrap core JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>-->

		<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function(){
        jQuery('.searchbtn').on('click',function(e){
            e.preventDefault();
            jQuery('.searchblock').show();
        })
        jQuery('.icon_close').on('click',function(e){
            e.preventDefault();
            jQuery('.searchblock').hide();
        })
        
        
        
        jQuery('.filters ul li').click(function(){
  jQuery('.filters ul li').removeClass('active');
  jQuery(this).addClass('active');
  
  var data = jQuery(this).attr('data-filter');
  $grid.isotope({
    filter: data
  })
});

var $grid = jQuery(".grid").isotope({
  itemSelector: ".all",
  percentPosition: true,
  masonry: {
    columnWidth: ".all"
  }
})
        
        
        
        
  jQuery('.bactotopicon').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '0');
});      
        
        
    })
    
    
    
    
</script>
	</body>
</html>
