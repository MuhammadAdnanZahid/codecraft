<?php   

// Template Name: Journals


get_header();?>


<section class="dept-slider home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">

            <div class="row dept-slider-row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">

               <div class="col-md-6 dept-imgr-anc ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <img src="https://software-craft.com/wp-content/uploads/2022/05/Expanding-Possibilities.png" width=500 height=500>
                
              </div>

                 <div class="col-md-6 m-0 text-left heading-section ftco-animate">
                
                <h2 class="pl-5" style="line-height:1; font-size: 65px;"><span class="h-sp1" style="font-size:82px;">EXPANDING</span><br><span>POSSIBILITIES</span></h2>
              </div>


              <div class="col-md-6 dept-pc-img ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <img src="https://software-craft.com/wp-content/uploads/2022/05/Expanding-Possibilities.png" width=500 height=500>
                
              </div>



            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          <div class="row justify-content-left" style="margin-top:-30px;">
            <div class="col-md-8 m-auto text-center heading-section ftco-animate">
            
              <h2 style="line-height:1"><span>Blogs</span></h2>
             
            </div>
          </div>
           <div class="row mob-jour-row no-gutters">
          
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
			 
			  <?php query_posts('showposts=3&offset=0'); if (have_posts()) : while (have_posts()) : the_post(); $posthead = get_field( 'post_header', $id);
$imgs  = $posthead['card_image']; ?>
			  
            <div class="text order-1 text-center" style="padding: 2% 3%;">
              <div class="card" style="width: 20rem; background:rgb(18 18 18 / 60%); border: 2px solid #888; padding: 0;">
                <div class="p-3">
                    <img class="card-img-top" src="<?php echo  $imgs['url']; ?>" alt="Card image cap" style="padding: 10px;"></div>
                    <div class="card-body text-left">
						<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <div style="display:flex; column-gap: 35%; font-size: 14px;">
                        <a>	
						<?php echo get_the_date(); ?>| <?php the_time();?></a>
                      <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/casestudies/Arrow-Right.svg" width=35 ></a></div>
                    </div>
                  </div>
            </div>
			  
			  <?php endwhile;?>
			  <?php endif; wp_reset_query(); ?>
          
          </div>
        
        </div>
			  <p class="text-center" style="margin-top:10px;"><button type="button" onclick="location.href='https://software-craft.com/blog/'" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 40px; border-radius: 3%;" >Read More</button>
        </div>
      </section>

<section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          <div class="row justify-content-left" style="margin-top:-30px;">
            <div class="col-md-8 m-auto text-center heading-section ftco-animate">
            <p class="pt-2"></p>
              <h2 style="line-height:1"><span>Case Studies</span></h2>
              <p class="pt-2"></p>
            </div>
          </div>
           <div class="row mob-jour-row no-gutters">
          
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
			 
       <?php  

	
$args = array(
      'post_type' => 'post',
    'post_status' => 'publish',
   	'cat' => '131',

);
$arr_posts = new WP_Query( $args );

?>
			  <?php query_posts('showposts=3&offset=0'); if ($arr_posts->have_posts()) : while ($arr_posts-> have_posts()) : $arr_posts->the_post(); $posthead = get_field( 'post_header', $id);
$imgs  = $posthead['card_image']; ?>
			  
            <div class="text order-1 text-center" style="padding: 2% 3%;">
              <div class="card" style="width: 20rem; background:rgb(18 18 18 / 60%); border: 2px solid #888; padding: 0;">
                <div class="p-3">
                    <img class="card-img-top" src="<?php echo  $imgs['url']; ?>" alt="Card image cap" style="padding: 10px;"></div>
                    <div class="card-body text-left">
						<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <div style="display:flex; column-gap: 35%; font-size: 14px;">
                        <a>	
						<?php echo get_the_date(); ?>| <?php the_time();?></a>
                      <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/casestudies/Arrow-Right.svg" width=35 ></a></div>
                    </div>
                  </div>
            </div>
			  
			  <?php endwhile;?>
			  <?php endif; wp_reset_query(); ?>
          
          </div>
        
        </div>
			  <p class="text-center" style="margin-top:10px;"><button type="button" onclick="location.href='https://software-craft.com/our-case-studies/'" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 40px; border-radius: 3%;" >Read More</button>
        </div>
      </section>







<!-- 
       <?php  

	
$args = array(
     'post_type' => 'post',
    'post_status' => 'publish',
   	'cat' => '131',

);
$arr_posts = new WP_Query( $args );



if ( $arr_posts->have_posts() ) :
$i=0;
            /* Start the Loop */
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();  
$posthead = get_field( 'post_header', $id);
$imgs  = $posthead['card_image'];
// $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
                if ( $i%3 == 0 ) { ?>
                  <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
           <div class="row mob-jour-row no-gutters">   
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
<?php                }
                  $content = get_the_content();
                  $content = strip_tags($content);
                ?>
			  
            <div class="text order-1 text-center" style="padding: 2% 3%;">
              <div class="card" style="width: 20rem; background:rgb(18 18 18 / 60%); border: 2px solid #888; padding: 0;">
                <div class="p-3">
                    <img class="card-img-top" src="<?php echo $imgs['url']; ?>" alt="Card image cap" style="padding: 10px;"></div>
                    <div class="card-body text-left">
						<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <div style="display:flex; column-gap: 35%; font-size: 14px;">
                        <a>	
						<?php echo get_the_date(); ?> | <?php the_time();?></a>
                      <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/casestudies/Arrow-Right.svg" width=35 ></a></div>
                    </div>
                  </div>
            </div>
			  
			 <?php if ( $i%3 == 2 ) { ?>
        </div>
   
        </div>
        </div>
      </section>
<?php
                       }
$i++;  
            endwhile;
			  ?>
 <?php echo the_posts_pagination();  ?>

           
<?php
        else :

            echo "No Posts";

        endif;
        ?>
 -->
      

  

<?php get_footer(); ?>