<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Trister_Theme
 * @since Trister Theme 1.0
 */

get_header();
?>
	<?php
$catid='';
$productid='';
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			$term=wp_get_post_terms( get_the_ID(), 'productcategories', $args = array() );
 if(!empty($term)){
        $catid=$term[0]->slug;
    }
    $productid=get_the_ID();
			?>
<section class="topheadersec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="pdtop10">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                             $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large');
                            ?>
                            <img src="<?php echo $image[0]; ?>" class="img-fluid singleimg" alt="<?php echo get_the_title(); ?>" >
                        </div>
                         <div class="col-lg-6 rightsingle">
                             <h3><?php echo get_the_title(); ?></h3>
                             <?php the_content(); ?>
                         </div>
                    </div>
                </div>
			
		
</section><!-- #site-content -->


	<?php
		}
	}

	?>
 
           <?php
          
          $args = array(
     'post__not_in' => array($productid),
    'posts_per_page'   => 4,
    'post_type'        => 'products',
    'order' => 'ASC',
    'tax_query' => array(
                        array(
                            'taxonomy' => 'productcategories',
                            'field'    => 'slug',
                            'terms'    => array($catid),
                            ),
                        ),
    
);
$query = new WP_Query( $args );
    if( $query->have_posts()):  ?>
    <section class="relatedsection pdtop10">
     <div class="container">
<div class="row  portfolioseccontent">
    <div class="col-sm-12 "><h4>Related Products</h4></div>
 <?php
 while( $query->have_posts()): $query->the_post();




    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
    
   
          ?>
          
          
        <div class="col-sm-4 ">
          <div class="item portfolioitems">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
            <div class="p-inner">
              <h5><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
              <div class="cat"><p><?php echo wp_filter_nohtml_kses( get_the_excerpt()); ?></p></div>
            </div>
          </div>
        </div>
        
     <?php endwhile;  ?>
     </div>
       </div>
 </section>  
   <?php  endif;
     ?>
   
<?php get_footer(); ?>
