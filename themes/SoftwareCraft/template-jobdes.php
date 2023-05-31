<?php   

// Template Name: Job Description


get_header();?>

<?php

	  
			  $jobdata = get_field( 'job_fields', $id);
			$jobtitle = $jobdata['job_title'];
			  $jobintro = $jobdata['job_description'];
				$jobresp = $jobdata['job_responsibilities'];
                $jobskills = $jobdata['job_skills'];
				

				
		
		
	




?>

<style>  ul{
	color: #e0d6d6;
	}  </style>


<section class="ftco-section mob-ftco-sec">
        <div class="container">
          <div class="row case-detail-row justify-content-left" style="margin-top:-60px;">
            <div class="col-md-8 m-auto text-left heading-section ftco-animate">
            
              <h2 style="line-height:1"><span><?php  echo $jobtitle;   ?></span></h2>
              <p class="pt-2"></p>
            </div>
            <div class="col-md-4 m-auto heading-section ftco-animate">
            
             <p  class="sec-btn text-center"><button type="button" onclick="openApply()" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 10px 60px; border-radius: 3%;">Apply Now</button></p>
            
            </div>


          </div>
          <div class="row mob-case-row no-gutters mt-3">
          
          <div class="col-md-12">
			  <h3>
				  Job Description
			  </h3>
            <p class="pt-2"><?php echo $jobintro; ?>
  
 </p>
 
 

          </div>
         
        </div>
        </div>
      </section>

<?php 
  if ($jobresp) {
    ?>

<section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row no-gutters">
          
          <div class="col-md-12">
			  <h3>
				  Job Responsibilities
			  </h3>
            <p class="pt-2"><?php echo $jobresp;  ?></p>
            
 

          </div>
         
        </div>
        </div>
      </section>

<?php 
  } // end if value
?>

<?php 
  if ($jobskills) {
    ?>

<section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
         
          <div class="row mob-case-row no-gutters">
          
          <div class="col-md-12">
			  <h3>
				  Skills Required
			  </h3>
            <p class="pt-2"><?php echo $jobskills; ?></p>
            
 

          </div>
			   <p  class="sec-btn text-center w-100"><button type="button" onclick="openApply()" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 10px 60px; border-radius: 3%;">Apply Now</button></p>
         
        </div>
        </div>
      </section>

<?php 
  } // end if value
?>

 <section id="jobopen" class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          <div class="row job-head-row py-2 justify-content-left" style="margin-left:88px;">
          <div class="vl2 mr-2" > </div>
            <div class="col-md-7 text-left heading-section ftco-animate">
              <h2 style="line-height:1; margin-top:-6px;"><span>RECENT</span><br><span>JOB OPENING</span></h2>
            </div>
          </div>
          <div class="job-row row mt-5 ml-3" style="">
            <div class="tab text-left">
              <button class="tablinks" onclick="openCity(event, 'Digital-Marketing')">Digital-Marketing</button>
              <button class="tablinks" onclick="openCity(event, 'Designing')">Designing</button>
              <button class="tablinks" onclick="openCity(event, 'Innovation')">Innovation</button>
              <button class="tablinks" onclick="openCity(event, 'Development')">Development</button>
          </div>
			  
			<?php 
  $args = array(
			  'post_type'=> 'job',
 				'post_status' => 'publish',
 				'cat' => '135',
 );
 $args_design = new WP_Query($args);
			  
			  if($args_design -> have_posts() ){
				  while( $args_design -> have_posts()){
					  $args_design -> the_post();
					 
					  $jobdata = get_field('job_fields', $id);
					  $jobtitle = $jobdata['job_title'];
					  $jobintro = $jobdata['job_description'];
			 		 $jobintro = wp_trim_words($jobintro, $num_words = 50, $more = null );
			  ?>

              <div id="Digital-Marketing" class="tabcontent careercaro owl-carousel">
                <div>
					<h3 class="m-3" style="color:#9EC124"><?php echo $jobtitle; ?></h3>
                <p class="m-3">
                    <?php echo $jobintro;  ?>
                </p>
                <p class="text-left m-3" style="margin-top:-20px;"><button onclick="location.href='<?php the_permalink(); ?>'" type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 30px; border-radius: 3%;">Apply</button></p>
              </div>
              </div>
			  <?php  } } 
			   else{  ?>
			  
			   <div id="Digital-Marketing" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                <h3 class="m-3" style="color:#9EC124">No Vacancies Available for Now</h3>
					 </div>

              </div>
			  
			  <?php
				  
			  }
			  
			  ?>
			 
			  
			  
			  
			  
			<?php 
  $args = array(
			  'post_type'=> 'job',
 				'post_status' => 'publish',
 				'cat' => '133',
 );
 $args_design = new WP_Query($args);
			  
			  if($args_design -> have_posts() ){
				  while( $args_design -> have_posts()){
					  $args_design -> the_post();
					 
					  $jobdata = get_field('job_fields', $id);
					  $jobtitle = $jobdata['job_title'];
					  $jobintro = $jobdata['job_descrription'];
			 		 $jobintro = wp_trim_words($jobintro, $num_words = 50, $more = null );
			  ?>

              <div id="Designing" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                 <h3 class="m-3" style="color:#9EC124"><?php echo $jobtitle; ?></h3>
					<p class="m-3">
                    <?php echo $jobintro;  ?>
                </p>
               
                <p class="text-left m-3" style="margin-top:-20px;"><button onclick="location.href='https://craft1.software-craft.com/job-description/'" type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 30px; border-radius: 3%;" onclick="location.href='<?php the_permalink(); ?>'" >Apply</button></p>
              </div>
              </div>
			  <?php }      }  else{  ?>
			  
			   <div id="Designing" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                <h3 class="m-3" style="color:#9EC124">No Vacancies Available for Now</h3>
					 </div>

              </div>
			  
			  <?php
				  
			  }
			  
			  ?>
			    
			<?php 
  $args = array(
			  'post_type'=> 'job',
 				'post_status' => 'publish',
 				'cat' => '134',
 );
 $args_design = new WP_Query($args);
			  
			  if($args_design -> have_posts() ){
				  while( $args_design -> have_posts()){
					  $args_design -> the_post();
					 
					  $jobdata = get_field('job_fields', $id);
					  $jobtitle = $jobdata['job_title'];
					  $jobintro = $jobdata['job_description'];
			 		 $jobintro = wp_trim_words($jobintro, $num_words = 50, $more = null );
			  ?>

              <div id="Innovation" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                <h3 class="m-3" style="color:#9EC124"><?php echo $jobtitle; ?></h3>
					<p class="m-3">
                    <?php echo $jobintro;  ?>
                </p>
          
                <p class="text-left m-3" style="margin-top:-20px;"><button onclick="openApply()" type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 30px; border-radius: 3%;" disabled>Apply</button></p>
              </div>

              </div>
			  
			  <?php }  }
			  
			  else{  ?>
			  
			   <div id="Innovation" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                <h3 class="m-3" style="color:#9EC124">No Vacancies Available for Now</h3>
					 </div>

              </div>
			  
			  <?php
				  
			  }
			  
			  ?>
			  
			  
			  
	  <?php  		  
			  	
$args = array(
    'post_type' => 'job',
    'post_status' => 'publish',
   	'cat' => '132',
);
$arr_dev = new WP_Query( $args );



if ( $arr_dev->have_posts() ) {
            /* Start the Loop */
            while ( $arr_dev->have_posts() ) {
                $arr_dev->the_post();  
			  
			  $jobhead = get_field( 'job_fields', $id);
			  $jobintro = $jobhead['job_description'];
				$jobintro = wp_trim_words($jobintro, $num_words = 50, $more = null )
			  ?>
			  
			  
			  
			  
              <div id="Development" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                 <h3 class="m-3" style="color:#9EC124"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					 <p class="m-3">
                    <?php echo $jobintro;  ?>
                </p>
                
                <p class="text-left m-3" style="margin-top:-20px;"><button type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; font-size: 16px !important; padding: 5px 30px; border-radius: 3%;" onclick="location.href='<?php the_permalink(); ?>'">Apply</button></p>
              </div>
              </div>
			  
			  <?php		 
			}  }  else{  ?>
			  
			   <div id="Development" class="tabcontent hidetab careercaro owl-carousel">
                <div>
                <h3 class="m-3" style="color:#9EC124">No Vacancies Available for Now</h3>
					 </div>

              </div>
			  
			  <?php
				  
			  }
			  
			  ?>

              <!-- content div end -->
             

         </div>    <!--   Job ROW END      -->
        </div>
      </section>



<?php get_footer(); ?>

     