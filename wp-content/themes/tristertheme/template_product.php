<?php 
/*
Template Name: Product Page
*/
get_header();
$pgid=get_the_ID();
?>

<section class="topheadersec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Products</h1>
            </div>
        </div>
    </div>
</section>
  <section class="portfolio section">
  <div class="container">
  
    
    <div class="filters">
<?php
$terms = get_terms([
    'taxonomy' => 'productcategories',
    'hide_empty' => false,
]);
?>
      <ul>
        <li class="active" data-filter="*">All</li>
        <?php foreach($terms as $term){ ?>
        <li data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
        <?php } ?>
       
      </ul>
    </div>
    
    <div class="filters-content">
      
          
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
    'posts_per_page'   => 9,
    'post_type'        => 'products',
    'order' => 'ASC',
    'paged' => $paged
);
$query = new WP_Query( $args );
    if( $query->have_posts()):  ?>
<div class="row grid portfolioseccontent">
 <?php
 while( $query->have_posts()): $query->the_post();

$term=wp_get_post_terms( get_the_ID(), 'productcategories', $args = array() );


    $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
    
    if(!empty($term)){
        $key=$term[0]->slug;
    }else{
        $key='';
    }
          ?>
          
          
        <div class="col-sm-4  all <?php echo $key;  ?>">
          <div class="item portfolioitems">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>">
            <div class="p-inner">
              <h5><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
              <div class="cat"><p><?php echo wp_filter_nohtml_kses( get_the_excerpt()); ?></p></div>
            </div>
          </div>
        </div>
        
     <?php endwhile; 
     ?>
     </div>
     <div class="row">
     <div class="col-lg-12">
         <div class="paginationblock">
     <?php
     //global $query;
     $big = 999999999;
     echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(
                        1,
                        get_query_var('paged')
                    ),
                    'total' => $query->max_num_pages //$q is your custom query
                )
            );
             
       // wp_reset_query(); 
     ?>
     </div>
     </div>
        </div>
     <?php
     endif;
     
     ?>   
   
        
   
    </div>
    
  </div>
</section>
                   

             
<?php 
get_footer();
?>