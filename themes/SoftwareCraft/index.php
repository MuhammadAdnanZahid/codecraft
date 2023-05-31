<?php 
    

get_header();


?>

<section class="home-slider dept-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">

            <div class="row dept-slider-row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <img  class="dept-pc-img" src="https://software-craft.com/wp-content/uploads/2022/05/Header-Image-DTIC.png" width=400>
                <img class="dept-imgr-anc" src="https://software-craft.com/wp-content/uploads/2022/05/Group-388.png" style="height: 100% !important;">
              </div>



            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      <?php  



if ( have_posts() ) :
$i=0;
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();  
$posthead = get_field( 'post_header', $id);
$imgs  = $posthead['card_image'];
// $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); 
                if ( $i%3 == 0 ) { ?>
                  <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
           <div class="row mob-jour-row no-gutters" >   
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
<?php                }
                  $content = get_the_content();
                  $content = strip_tags($content);
                ?>
			  
            <div class="text order-1 text-center" style="padding: 2% 3%;">
              <div class="card" style="width: 20rem; background:rgb(18 18 18 / 60%); border: 2px solid #888; padding: 0;">
                <div class="p-3">
                    <img class="card-img-top" src="<?php echo $imgs['url'];  ?>" alt="Card image cap" style="padding: 10px; "></div>
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
</section>


 <?php echo the_posts_pagination();  ?>

           
<?php
        else :

            echo "No Posts";

        endif;
        ?>

      
          
         

    


<?php get_footer(); ?>