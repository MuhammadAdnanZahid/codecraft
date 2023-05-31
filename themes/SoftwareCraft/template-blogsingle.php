<?php 
    
    // Template Name: Blog Single
  
get_header();







?>

<?php  $posthead = get_field( 'post_header', $id);
		$postdesone = get_field( 'detail_section_one', $id);
        $postdestwo = get_field( 'detail_section_two', $id);
        $postdesthree = get_field( 'detail_section_three', $id);
		$postdesfour = get_field( 'detail_section_four', $id);
		$postdesfive = get_field( 'detail_section_five', $id);

		  
		  ?>
		<style>  ul{
	color: #e0d6d6;
	}  </style>

      <section class="ftco-section mob-ftco-sec">
        <div class="container">
          <div class="row case-detail-row justify-content-left" style="margin-top:-60px;">
            <div class="col-md-8 m-auto text-center heading-section ftco-animate">
            
              <h2 style="line-height:1; font-size:35px;"><span><?php echo $posthead['post_heading']; ?></span></h2>
              <p class="pt-2"></p>
            </div>
          </div>
          <div class="row mob-case-row no-gutters">
          
          <div class="col-md-12">
            <p class="pt-2"><?php echo $posthead['post_intoduction'];   ?></p>
  
 

          </div>
         
        </div>
        </div>
      </section>

<?php $imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');  ?>

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          
          <div class="row mob-case-row no-gutters" style="margin-top:6% ">
			   <div class="ftco-animate" data-scrollax-parent="true" style="margin:0 auto;">

            <a class=" mb-5 image  d-flex justify-content-center align-items-center" style=" width: 100%; "><img class="dept-img" src="<?php echo $imgpath[0] ?>"  width=100% height=400 ></a>

           
          </div>
          
         
        </div>
        </div>
      </section>

<?php 
	$done = $postdesone['post_detail_one'];
  if ($done) {
    ?>
      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row ">
          
          <div class="col-md-12">
           
            <p class="pt-2"><?php echo $done ?>
         </p>


          </div>
         
        </div>
        </div>
      </section>
<?php 
  } // end if value
?>


 
<?php 
    $dtwo = $postdestwo['post_detail_two'];
  if ($dtwo ) {
    ?>
      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row ">
          
          <div class="col-md-12">
            
            <p class="pt-2"><?php echo $dtwo ?>

         </p>



          </div>
         
        </div>
        </div>
      </section>
<?php 
  } // end if value

?>

<?php
$dthree = $postdesthree['post_detail_three'];
if ($dthree) {
    ?>
      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row ">
          
          <div class="col-md-12">
            
            <p class="pt-2"><?php echo $dthree ?>

         </p>



          </div>
         
        </div>
        </div>
      </section>
<?php 
  } // end if value

?>



<?php
$dfour = $postdesfour['post_detail_four'];
if ($dfour) {
    ?>
      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row ">
          
          <div class="col-md-12">
            
            <p class="pt-2"><?php echo $dfour ?>

         </p>



          </div>
         
        </div>
        </div>
      </section>
<?php 
  } // end if value

?>


<?php
$dfive = $postdesfive['post_detail_five'];
if ($dfive) {
    ?>
      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row ">
          
          <div class="col-md-12">
            
            <p class="pt-2"><?php echo $dfive ?>

         </p>



          </div>
         
        </div>
        </div>
      </section>
<?php 
  } // end if value

?>





<!-- -------------------------- Featured Posts ---------------------------------  -->
 <section class="ftco-section secscroll">
        <div class="container">
			
			 <div class="row crop-brand-row my-2 justify-content-left " >
            <div class="col-md-12 m-auto text-center heading-section ftco-animate">
            
              <h2><span>Our Featured Posts</span></h2>
              
            </div>
          </div>
         
           <div class="row mob-jour-row no-gutters">
          
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
			 
			  <?php query_posts('showposts=3&orderby=rand'); if (have_posts()) : while (have_posts()) : the_post(); $posthead = get_field( 'post_header', $id);
$imgs  = $posthead['card_image']; ?>
			  
            <div class="text order-1 text-center" style="padding: 2% 3%;">
              <div class="card" style="width: 20rem; background:rgb(18 18 18 / 60%); border: 2px solid #888; padding: 0;">
                <div class="p-3">
                    <img class="card-img-top" src="<?php echo $imgs['url'];?>" alt="Card image cap" style="padding: 10px; height: 150px;"></div>
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
        </div>
      </section>
      

       
      


     

  

<?php get_footer(); ?>
		  
		  
		
