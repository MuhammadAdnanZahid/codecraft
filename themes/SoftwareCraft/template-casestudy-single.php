<?php 
    
    // Template Name: Case Study Single

get_header();



?>





      

     <?php  
		$posthead = get_field( 'post_header', $id);
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
            <p class="pt-2"><?php echo $posthead['post_intoduction']; ?></p>
  
 

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










    <style type="text/css">
        .mob-ftco-sec .case-detail-row .detail-form{
          width: 80%;
          margin: 0 auto;
        }
        .mob-ftco-sec .case-detail-row .detail-form .form-group {
          margin: 0 auto;
          padding-bottom: 20px;

        }
      </style>

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
           <div class="row case-detail-row no-gutters" style="margin-top:6%">
          <div class="block-3 ftco-animate" data-scrollax-parent="true" style="padding:3rem; background: rgb(18 18 18 / 60%); height: 300px; border: 2px solid #888; margin:0 auto;" >

             <div class="col-md-12 m-auto text-center heading-section ftco-animate">
            
              <h2 class="case-detail-heading" style="line-height:1; margin: 0 auto; "><span>Need Help for Similar Kind of Project?  </span></h2>
              <p class="pt-2"></p>
            </div>

            

             <div class="col-md-12 case-detail-col d-flex align-self-stretch ftco-animate">       
                  
                  <form class="detail-form" style="border:none;" method="POST" id="csform" name="csform" onsubmit="return  csformsubmit()">
                      <div class="form-row">
              <span id="cs-message" style="margin-top:-180px"></span>
              <div class="form-row mob-form-row w-100"style="margin-left: 2px;">
                  <div class="form-group w-30">     
                     <i style="position: absolute; padding:12px;" class="fas fa-user-alt"></i><input type="text" class="form-control" style="text-indent: 40px; border-radius:4px; background:#fff !important;" id="csname" name="csname" placeholder="Username">
                        </div>

               <div class="form-group w-30">
                          <i style="position: absolute; padding:12px;" class="far fa-paper-plane"></i><input type="email" class="form-control" id="csemail" name="csemail" placeholder="Email">
                        </div>
                         <div class="form-group w-30">
                          <i style="position: absolute; padding:12px;" class="fas fa-money-bill"></i><input type="text" class="form-control" id="csphone" name="csphone"placeholder="Phone no.">
                        </div>
                </div>
                                                
                       
                        <div class="form-group " style="width:92%">
                          <input type="text" class="form-control" id="pmessages" name="csmessage"placeholder="How can We help you?"  style="text-indent:unset;">
                        </div>
                        <div class="case-form-btn" style="margin: 0 auto; width: 50%"><button type="submit" id="cssubmit" name="cssubmit" class="w-100 btn btn-md" style="float: right;background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 5px 30px; border-radius: 3%;">Submit</button></div>
                      </div>
                      
                </form>   

            </div>
              
            
          </div>
  
         
        </div>
        </div>
      </section>




<script type="text/javascript">
  
  function  csformsubmit() {
  var qurl ="<?php bloginfo('template_directory'); ?>/mail.php";
//   var filhall ="<?php bloginfo('template_directory'); ?>/template-Filhalluk.php";


   
      let csform = document.getElementById("csform");
    let fd = new FormData(csform);
  

    $.ajax({
        url: qurl,
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (res) {
     var result = $.parseJSON(res);
   
     $("#cs-message").html(result); 
     document.getElementById("csform").reset();
     window.setTimeout( window.location.href='https://software-craft.com/casestudysingle/', 25000 );
  
            
        }
    });
    return false;

  }




</script>
    

  
<?php get_footer(); ?>
