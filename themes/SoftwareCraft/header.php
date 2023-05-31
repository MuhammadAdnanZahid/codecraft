<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=0, shrink-to-fit=no">
   <!-- Page Title -->
    <title><?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('');
    }?></title>

    <?php  wp_head(); ?>

    <script>
var tempdir = "<?php bloginfo('template_directory') ?>";

   </script>

		
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HN9FFFZ37M"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'G-HN9FFFZ37M');
</script>
	
<meta name="facebook-domain-verification" content="7yyat0rqvtavg281kcdritjbk1xiyn" />	
<meta name="google-site-verification" content="wWGXQjBRYlDchxXnaeTEr_m-zhRrJ2BrYRq3-rrPVSk" />
	<meta name="p:domain_verify" content="6acf54cfd66bff8dafa915eb4989e422"/>
</head>

  <body>
<?php  require_once("template-popups.php")  ?>
    
   <div class="page" id="page">

     <section class="right-head">
        <div class="container" style="height:100vh">
          <div class="row" style="height: 50%">
            <div class="col-md-4" style="float:left;">
              <div class="colorlib-navbar-brand mt-5">
                 <a class="" onclick="openQuote()" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed; cursor: pointer;">Get a Qoute</a>
            
              </div>
            </div>
          </div>

          <div class="row" style="height:45%; align-items:end;">
            <div class="col-md-4" style="float:left;">
              <div id="arrowprev" class="colorlib-navbar-brand mt-4" style="cursor:pointer;">
                 <a id="prev" class="prev" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed;"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Up-Arrow-Right.svg" height=30></a>
            
              </div>
              <div id="arrownext" class="colorlib-navbar-brand mt-4" style="cursor:pointer;">
                 <a id="next" class="next" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed;"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Down-Arrow-right.svg" height=30></a>
            
              </div>
            </div>
          </div>

        </div>
           
      </section>
<!--       <a  onclick="openQuote()" class="btnfloat" title="Get a Quote" style="display:none;">
              <i class="far fa-comment-alt btn-icon-float"></i>
              
          </a>  -->

     


    <nav id="colorlib-main-nav" role="navigation">
      <a href="javascript:void(0)" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="colorlib-table-cell js-fullheight">
          <h1 class="m-5 text-left nav-exp-logo"><a href="https://software-craft.com/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Site-Logo-pvt.png" width=250 height=60></a></h1>
          <div class="row mob-nav-row no-gutters">
            <div class="col-md-6 text-left">
              

              <div class="col-md-8 mt-2 nav-about" style="text-align:left; margin-left: 120px;">
                <h1 >About Us</h1>
                <p>We craft the best out of your imagination. With our sole purpose of Transforming Pakistan, we are not only obligated but determined to provide competitive solutions in terms of quality and price tags</p>
                <p><button type="button"  onclick="openQuote()" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 5px 30px; border-radius: 3%;">Let Us Craft</button>
					<button type="button"  onclick="openQuote()" class="btn btn-lg ml-2" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 5px 30px; border-radius: 3%;">Our Offers</button>
              </p>


                  <ul class="" style="list-style:none; padding: 0; display: flex;">
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://www.facebook.com/softwarecraft/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-facebook-f" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://twitter.com/software_craft" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-twitter" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://www.linkedin.com/company/software-craft-official/mycompany/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-linkedin-in" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://instagram.com/softwarecraftofficial" class="animated-element" target="_blank" rel="noreferrer noopener"><i class="fab fa-instagram" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                </ul>



              </div>
              
            </div>

              <div class="col-md-6 text-left mob-menu-div">
              
              <div class="mob-main-menu" style="  margin-left: 40px;  margin-top: -150px; ">
                
                <?php wp_nav_menu(array('theme_location'=>'primary-menu', 'depth' => 2))  ?>
                
              </div>
				   <ul class="pc-social mt-2" style="list-style:none; padding: 0;  display: flex;">
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://www.facebook.com/softwarecraft/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-facebook-f" style="font-size:16px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://twitter.com/software_craft" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-twitter" style="font-size:16px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://www.linkedin.com/company/software-craft-official/mycompany/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-linkedin-in" style="font-size:16px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap pr-3"><a style="color: #fff;" href="https://instagram.com/softwarecraftofficial" class="animated-element" target="_blank" rel="noreferrer noopener"><i class="fab fa-instagram" style="font-size:16px;" aria-hidden="true"></i></a> </li>
                </ul>
            </div>


          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page" class="secscroll">

      <section class="top-head">
        <div class="container">
          <div class="row">
            <div class="col-md-4 top-div1" style="float:left;">
              <div class="colorlib-navbar-brand">
                <a class="" href="<?php echo get_site_url();?>"><span class="logo-img" ><img src="https://software-craft.com/wp-content/uploads/2022/05/Logo-Png.png" width=250  style="margin-top: 6%;"></span></a>
              </div>
            </div>
			  
            <div class="col-md-8 top-div2 top-nav-btn">
              <a href="javascript:void(0)" class="js-colorlib-nav-toggle colorlib-nav-toggle" style="padding-top:35px;"><i></i></a>
            </div>
			  <div class="col-md-8 top-div3">
                <div class="breadcrumb" style="background-color: transparent; color:#fff;  float:right; margin-bottom:0; padding-top: 1.8rem;"> <?php 
					if(is_front_page()){
						echo"";
					}else{
						if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
					}
					
					
?></div>
				 
            </div>
			
          </div>
        </div>
      </section>

      <!-- <section class="right-head">
        <div class="container" style="height:100vh">
          <div class="row">
            <div class="col-md-4" style="float:left;">
              <div class="colorlib-navbar-brand mt-5">
                 <a href="#" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed;">Get a Qoute</a>
            
              </div>
            </div>
          </div>

          <div class="row" style="height:55%; align-items:end;">
            <div class="col-md-4" style="float:left;">
              <div class="colorlib-navbar-brand mt-4">
                 <a href="#" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed;"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Up-Arrow-Right.svg" height=30></a>
            
              </div>
              <div class="colorlib-navbar-brand mt-4">
                 <a href="#" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed;"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Down-Arrow-Right.svg" height=30></a>
            
              </div>
            </div>
          </div>

        </div>
      </section> -->

      <header>
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand mt-4" style="width:100%;">
                <ul class="social-icons-simple" style="list-style:none; padding: 0;">
                    <li class="animated-wrap"><a style="color: #fff;" href="https://www.facebook.com/softwarecraft/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-facebook-f" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap"><a style="color: #fff;" href="https://twitter.com/software_craft" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-twitter" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap"><a style="color: #fff;" href="https://www.linkedin.com/company/software-craft-official/mycompany/" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-linkedin-in" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                    <li class="animated-wrap"><a style="color: #fff;" href="https://instagram.com/softwarecraftofficial" target="_blank" rel="noreferrer noopener" class="animated-element"><i class="fab fa-instagram" style="font-size:14px;" aria-hidden="true"></i></a> </li>
                </ul>
              </div>
            
            </div>
          </div>

          <div class="row" style="height: 45vh; align-items: center;">
            <div class="ml-2 col-md-12">

               <a href="javascript:void(0)" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            
            </div>
          </div>


          <div class="row" style="height: 35vh; align-items: center; text-align: center;">
            <div class="col-md-12">

               <a onclick="openMeeting()" style="color:#fff; writing-mode: vertical-rl; text-orientation: mixed; font-size:14px; cursor: pointer;">Schedule Meeting</a>
            
            </div>
          </div>

        </div>     
       
      </header>