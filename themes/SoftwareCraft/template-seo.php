<?php   

// Template Name: SEO


get_header();?>

<style>
	

	i{
		margin-right:8px;
		color:#a1cc3a;
	}
	ul{
		color:#e0d6d6;
	}
	
	.vacard{
		margin: 2px;

	}
	
	
	.card:hover a{
		color: #fff !important;
	}
	
	.block-3:hover > .card:hover {

	
	background: #a1cc3a !important;
    transition: transform .35s,border-color 0s linear .35s;
		transform: scale(1.15);
    z-index: 5;

		
/* 		transition: transform 2s;
		   transform: scale(1.15);
    box-shadow: 0 3px 15px rgb(0 0 0 / 40%);
		 z-index: 5; */
		
/*
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
  z-index: 10; */
}

	
	@media (min-width: 320px) and (max-width: 764px){
	
		.mob-ftco-sec .seo-row .block-3 .mob-dept-txt button{
			margin-right:0 !important;
			padding: 10px 10px !important;
			width: 140px !important
		}
		
		.mob-ftco-sec .mob-case-row  .doted-line{
			display:none;
		}
		
		
	}

</style>



<section class="home-slider dept-slider owl-carousel js-fullheight" >
        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">

            <div class="row seo-row dept-slider-row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">

              <div class="col-md-5 dept-imgr-anc ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <img src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Banner-Img.svg" width=400 height=400>
                
              </div>

                 <div class="col-md-6 col-lg-7 text-left heading-section ftco-animate">
                  <h2 class="pl-3" style="line-height:0.8; font-size: 50px;"><span style="font-size: 95px;" class="h-sp1">SEARCH</span><br><span class="h-sp1" style="font-size: 95px; letter-spacing: 7px;">ENGINE</span><br><span class="h-sp1">OPTIMIZATION<br></span></h2>
                
              </div>


            <div class="col-md-5 dept-pc-img ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <img src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Banner-Img.svg" width=400 height=400>
                
              </div>



            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
           <div class="row seo-row no-gutters">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">

            <a href=" " class="image dept-imgl-anc pb-3 d-flex justify-content-center align-items-center" style="padding-top:0.5%; margin-left:40px;  " data-scrollax=" properties: { translateY: '10%'}"><img class="dept-img" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/What-it-takes-Section-Img.png" width=400 height=400>
              
            </a>
            <div class="text mob-dept-txt" style=" margin-left:30px ;padding-top: 6%;">

                  <div class="row justify-content-left" style="margin-left:1px;">
            <div class="vl mobvl2 mr-2" > </div>
            <div class="col-md-9 mb-5 text-left heading-section ftco-animate">
            
              <h2 class="heading-lite"><span>WHAT IT TAKES<br>TO BE ON TOP</span></h2>
            </div>
          </div>

              <p class="">As a global SEO Services Company we think that, It takes endless efforts to be on top. We make search engines look for what we want them to look at with our garnished SEO Services. It provides a stream presence of your website on virtual space, which allows fast web traffic to your spot.</p>
              <hr>
				
				 <button  onclick="openQuote()" type="button" class="btn btn-lg mr-3  dm-btn" style="background-color:#fff;width:170px; color: #000; opacity: 1; border: 1px solid #fff; padding: 10px 20px; border-radius: 2%;">Expert Assistance</button>
				  <button onclick="formsec()"  type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; width:170px; padding: 10px 20px; border-radius: 2%;">Contact Us</button>
				
<!--               <p class="sec-btn"><button onclick="openQuote()" type="button" class="btn btn-lg" style="background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 10px 60px; border-radius: 2%;">Experts Assistance</button></p> -->
            </div>
          </div>
  
         
        </div>
        </div>
      </section>

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          <div class="row mt-4 justify-content-left">
            <div class="col-md-8 m-auto text-center heading-section ftco-animate">
            
              <h2 style="line-height:1"><span>LET'S MAXIMIZE YOUR PRESENCE</span></h2>
              
            </div>
          </div>
          <div class="row mob-cherry-row no-gutters">
          
          <div class="block-3 d-lg-flex ftco-animate" data-scrollax-parent="true">
            
            <div class="text order-1 text-center" style="padding: 3% 2%;">
              <div class="card" style="width: 22rem; background:url('<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Branding-tra-Infographics-01.svg'); padding: 0; height: 380px;background-size: 370px ; background-position: center; background-repeat: no-repeat;  border: none;">

                 <div class="card-body text-center">
                      <h4 class="card-title pl-3 pr-5 mt-5" style="color: #9EC124;">Trip Attractive Traffic</h4>
                      <div style="margin: 0 auto; width:70%;"><hr class="m-0" style="width:80%"></div><br>
                      <p class="card-text pl-2 pr-5 text-center" style="font-size: 12px; ">SEO directs to low-hanging fruit. SEO provides the search engines by studying their algorithms and thus it provides the required attention and traffic to your website.  </p>
                      <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Trip-Attractive-Traffic-Icon.svg" width=50 height=50 alt="Card image cap">
                    </div>
               
                  </div>
            </div>
            <div class="text order-1 text-center" style="padding: 3% 2%;">
              <div class="card" style="width: 22rem; background:url('<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Branding-tra-Infographics-02.svg'); padding: 0; height: 380px; background-size: 370px ;background-position: center; background-repeat: no-repeat; border: none;">



                    <div class="card-body text-center">
                      <h4 class="card-title pl-3 pr-5 mt-5" style="color: #9EC124;">Make It Immovable</h4>
                      <div style="margin: 0 auto; width:70%;"><hr class="m-0" style="width:80%"></div><br>
                      <p class="card-text pl-2 pr-5 text-center" style="font-size: 12px;">We make SEO-friendly content and visualization to be loved not only by the search engine but becomes a choice of the audience as well. </p>
                      <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Immovable-Icon.svg" width=50 height=50 alt="Card image cap">
                    </div>
                    

               
                  </div>
            </div>
            <div class="text order-1 text-center" style="padding: 3% 2%;">
              <div class="card" style="width: 22rem; background:url('<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Branding-tra-Infographics-03.svg'); padding: 0; height: 380px; background-size: 370px ; background-position: center; background-repeat: no-repeat;  border: none;">

                 <div class="card-body text-center">
                      <h4 class="card-title pl-3 pr-5 mt-5" style="color: #9EC124;">Strategic Approach</h4>
                      <div style="margin: 0 auto; width:70%;"><hr class="m-0" style="width:80%"></div><br>
                      <p class="card-text pl-2 pr-5 text-center" style="font-size: 12px;">Our approach is killing two birds with one stone. We want your website to be in the good books of both the search engine and the potential audience.</p>
                      <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Strategic-Approach.svg" width=50 height=50 alt="Card image cap">
                    </div>
               
                  </div>
            </div>




          </div>
         
        </div>
        </div>
      </section>
      

      
    

      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
            <div class="row justify-content-left mb-3" style="margin-top:-20px;">
            <div class="col-md-8 m-auto text-center heading-section ftco-animate">
              <h2 style="line-height:1"><span>SEO ADVANCEMENTS</span></h2>       
            </div>
          </div>
           <div class="row pc-seo-advc-row no-gutters" style="margin-left:10%">
         <div class="col-md-2 align-self-stretch ftco-animate">
                <div class="text order-1" style="margin-top:60%;" >
                <div class="bg-transparent pt-3">
                    <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/International-SEO.svg" width=40 height=40 alt="Card image cap">
                    <div class="card-body text-center">
                      <h6 class="card-title" style="color: #9EC124;">International<br>SEO</h6>
                      
                    </div>
                  </div>
            </div>  
            <div class="text order-1" style="margin-top:60%;" >
                <div class="bg-transparent">
                    <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/E-Commerce-SEO.svg" width=40 height=40 alt="Card image cap">
                    <div class="card-body text-center">
                      <h6 class="card-title" style="color: #9EC124;">E-Commerce<br>SEO</h6>
                      
                    </div>
                  </div>
            </div>    
            </div>
            <div class="col-md-8 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="text order-1 seograph" >
              <p class="px-5 py-4 " >A process of creating visibility and generating leads for the locally targeted audience which could be defined by area, city, or country.  </p>
              <p class="px-5 py-3">A process of all the SEO activities performed but in more than one country or more than one language. </p>
              <p class="px-5 pt-5 pb-4">A process optimizing website server and letting search engine spiders crawl and index your website sequentially. </p>
               <p class="px-5 py-2">A process of creating optimized Meta Titles, Meta Descriptions, Link Structures, and Product Descriptions to make e-commerce stores visible in Search Engine Result Pages (SERPs).</p>
             
            </div>           
            </div>
            <div class="col-md-2 align-self-stretch ftco-animate">
              <div class="text order-1" >
                <div class="bg-transparent pt-3">
                    <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Local-SEO.svg" width=50 height=50 alt="Card image cap">
                    <div class="card-body text-center">
                      <h6 class="card-title" style="color: #9EC124;">Local SEO</h6>
                      
                    </div>
                  </div>
            </div>  
            <div class="text order-1" style="margin-top:50%;" >
                <div class="bg-transparent">
                    <img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/assets/homepage/SEO/Technical-SEO.svg" width=50 height=50 alt="Card image cap">
                    <div class="card-body text-center">
                      <h6 class="card-title" style="color: #9EC124;">Technical<br>SEO</h6>
                      
                    </div>
                  </div>
            </div>  
            </div>
          
  
         
        </div>
         <!-- Advacements Pc Row End -->

        <div class="row mob-seo-advc-row no-gutters" style="margin: 0 auto;">
          <div class="col-sm-2 align-self-stretch ftco-animate"  style="width:20%">
                <div class="text order-1" style="margin-top:60%;" >
                <div class="bg-transparent pt-3">
                    <img class="" src="<?php bloginfo('template_directory'); ?>/assets/homepage/mobile/SEO-Infograph.png" width=100  alt="Card image cap">
                  </div>
            </div>  
               
            </div>
            <div class="col-sm-7 d-flex align-self-stretch ftco-animate" style="width:70%" >
              <div class="text mt-5 order-1 " >
                <h5 class="pl-5 pt-2"  style="color: #9EC124;">Local SEO</h5>
              <p class="pl-5 py-2 " >A process of creating visibility and generating leads for the locally targeted audience which could be defined by area, city, or country.  </p>
              <h5 class="pl-5" style="color: #9EC124;">International SEO</h5>
              <p class="pl-5 pt-3 pb-4">A process of all the SEO activities performed but in more than one country or more than one language. </p>
              <h5 class="pl-5" style="color: #9EC124;">Technical SEO</h5>
              <p class="pl-5 pt-2 pb-4">A process optimizing website server and letting search engine spiders crawl and index your website sequentially. </p>
              <h5 class="pl-5 pt-2" style="color: #9EC124;">E-commerce SEO</h5>
               <p class="pl-5 py-2">A process of creating optimized Meta Titles, Meta Descriptions, Link Structures, and Product Descriptions to make e-commerce store visible in Search Engine Result Pages (SERPs).</p>
             
            </div>           
            </div>
         
        </div>

        </div>
      </section>

      <section class="ftco-section mob-ftco-sec secscroll" id="seo-form-sec">
        <div class="container">
           <div class="row no-gutters" style="margin-top:-20px;">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">

            <div class="text" style=" margin-left:20px ; padding-top:3%; padding-left:3%">

                  <div class="row justify-content-left" style="margin-left:1px;">
            <div class="vl2 mobvl3 mr-2" style="height: 64px;"> </div>
            <div class="col-md-8 mb-5 text-left heading-section ftco-animate">
            
              <h2 ><span><a href="https://software-craft.com/contact-us/">
				  LET'S GET<br>RANKED!</a></span></h2>
            </div>
          </div>

              <p class="">Our artisans believe that sky’s the limit while optimizing your website. Your idea and our deliverance will make sure we go all out to the market and increase the traffic by leaps and bounds. An imaginary friend we become to support you all time. Let us be behind the curtains and back you up the whole time to get you ranked to the top with our SEO Services. </p>
              <hr><br><br>
              <h6 style="font-family: playfair; color: #fff; font-size: 18px;">"SEO is not a SPRINT, But a MARATHON"</h6>
            </div>

             <div class="col-md-6 d-flex align-self-stretch ftco-animate">       
                  
                  <form style="padding:3rem; background: rgb(18 18 18 / 60%); height: 500px;" method="POST" id="pform" name="pform" onsubmit="return  pformsubmit()">
                      <div class="form-row">
						  <span id="seo-message" style="margin-top: -120px;"></span>
                        <div class="form-group w-100">     
                     <i style="position: absolute; padding:12px;" class="fas fa-user-alt"></i><input type="text" class="form-control" style="text-indent: 40px; border-radius:4px; background:#fff !important;" id="pname" name="pname" placeholder="Username" required="">
                        </div>
                        <div class="form-group w-100">
                          <i style="position: absolute; padding:12px;" class="far fa-paper-plane"></i><input type="email" class="form-control" id="pemail" name="pemail" placeholder="Email" required="">
                        </div>
                        <div class="form-group w-100">
                          <i style="position: absolute; padding:12px;" class="fas  fa-location-dot"></i><input type="text" class="form-control" name="paddress"  id="paddress" placeholder="Address">
                        </div>
                        <div class="form-group w-100">
                          <i style="position: absolute; padding:12px;" class="fas fa-money-bill"></i><input type="text" class="form-control" id="pphone" name="pphone" placeholder="Phone no.">
                        </div>
                        <div class="form-group w-100">
                          <textarea type="textarea" class="form-control" style="text-indent:0px" rows="5" cols="20" id="pmessage" name="pmessage" placeholder="Project Details..."></textarea>
                        </div>
                        <div class="w-100"><button type="submit" id="psubmit" name="psubmit"  class="w-100 btn btn-md" style="float: right;background-color: transparent; color: #fff; opacity: 1; border: 1px solid #fff; padding: 5px 30px; border-radius: 3%;" >Submit</button></div>
                      </div>
                      
                </form>   

            </div>
              
            
          </div>
  
         
        </div>
        </div>
      </section>

			
		  <section class="ftco-section mob-ftco-sec  secscroll">
        <div class="container">
         
          <div class="row mob-case-row my-3">
			 
			  <div class="col-md-12 mob-va-col d-md-flex ">
				  
				    
				  
				  <div class="col-md-12 pl-4">
					   <div class="row justify-content-left" style="margin-left:1px;">
            <div class="vl1 mobvl1   mr-2"> </div>
            <div class="col-md-10 mb-4 text-left heading-section ftco-animate">
            
              <h2 class="dpt-infra-hding">Let's Dive Further</h2>
            </div>
          </div>
				
				  
				       <div class="row mob-jour-row mt-2 no-gutters" >   
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
			  
              <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href=" https://software-craft.com/services/seo-services/">Search Engine Optimization</a>
						</h4>
                    </div>
                  </div>
				
			  
			  
			   <div class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			  
				 <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href="https://software-craft.com/services/search-engine-marketing/">Search Engine Marketing</a>
						</h4>
                    </div>
                  </div>
				
			  
			  <div  class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			  
				 <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href=" https://software-craft.com/services/social-media-marketing/">Social Media Marketing </a>
						</h4>
                    </div>
                  </div>
			  
			  
			  <div class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			  
			  
			   <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href="https://software-craft.com/services/app-store-optimization/">App Store Optimization</a>
						</h4>
                    </div>
                  </div>
				
				
          
			  

        </div>
   
        </div>
					  
			 <div class="doted-line" style="border-bottom: 2px dashed #545454; width:97%; "></div>
					  
					  
					  
					    <div class="row  mob-jour-row no-gutters" >   
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
			  
             
				
				 <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href=" https://software-craft.com/services/desktop-application-development/">Desktop Application</a>
						</h4>
                    </div>
                  </div>
			  
			  
			  <div class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			 
			   <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href=" https://software-craft.com/services/web-application-development/">Web Application Development</a>
						</h4>
                    </div>
                  </div>
			  
			  
			  <div class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			  
			  
			   <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href=" https://software-craft.com/services/android-application-development/">Andrioad Application</a>
						</h4>
                    </div>
                  </div>
			  
			  
			  <div class="doted-line" style="border-right: 2px dashed #545454; height:100% "></div>
			  
			  
			   <div class="card vacard" style="width: 16rem; background:#fff; border: 1px solid #888; padding: 0; ">
               
                    <div class="card-body text-center">
						<h5 class="card-title"></h5>
						<h4>
							<a href="https://software-craft.com/services/content-writing-services/">Content Writting</a>
						</h4>
                    </div>
                  </div>
				
          
			  

        </div>
   
        </div>
					  		  
			  
	    </div>
				  
			  </div>
          
         			  
         
        </div>

        </div>
      </section>


		








        <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          
              <div class="row mob-seo-casestudy-row  justify-content-left" style=" margin-left: 55px; margin-top: -12px;">
            <div class="vl2 mobvl3 mr-2" style="height:64px ;"> </div>
            <div class="col-md-7 text-left heading-section ftco-animate">
            
              <h2 style="line-height:1; margin-top:-5px;"><span>THEY CAME, THEY STAYED</span><br><span>THEY CONQUERED</span></h2>
            </div>
          </div>
      
           <div class="row mob-seo-row no-gutters mt-5">
            <div class="mob-seo-casestudy" style="background: rgb(18 18 18 / 60%); border: 2px solid #888; height:360px;">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true" style="margin-top:-20px;">

            <a  class="image seo-casestudy-anc d-flex justify-content-center align-items-center" style="padding:2% 0% 4%; margin-left:20px;  " data-scrollax=" properties: { translateY: '10%'}"><img class="seo-casestudy-img" src="https://software-craft.com/wp-content/uploads/2022/04/Filhaaluk.png"  width=320>
              
            </a>
            <div class="text seo-casestudy-txt pl-3" style="padding-top: 6%; ">

            <div class="row justify-content-left" style="margin-left:1px;">
            <div class="col-md-12 mb-2 text-left heading-section ftco-animate">
            
              <h2 style="line-height:1"><span>Filhaal UK</span></h2>
              
            </div>
          </div>

              <p class="seo-casestudy-para">Filhaal UK is a very interesting and known client to the public nowadays. They started their SEO marathon with another SEO agency that couldn’t provide transparent communication. Filhaal UK came to Software Craft for the change and transformation we offer. We provided them with SEO solutions to rebrand their entity and provided solutions to launch new products.Software Craft and Filhaal UK brought up a common motive that was empowering the nation and worked through multiple strategies to support and empower the clients.  </p>
              
             <div style="display:flex; column-gap: 35%; font-size: 14px;">
                        <a>Feb 2,2022| 02:30 PM</a>
                      <a  href="https://software-craft.com/filhall-uk/"><img src="<?php bloginfo('template_directory'); ?>/assets/homepage/casestudies/Arrow-Right.svg" width=35 ></a></div>
            
          </div>
  
         
        </div>
        </div>
      </div>
      </div>
      </section>


      <section class="ftco-section mob-ftco-sec secscroll">
        <div class="container">
          <div class="row mob-faq-row  py-2  justify-content-left" style="margin-left:55px;">
          <div class="vl1 mr-2" style=""> </div>
            <div class="col-md-10 text-left heading-section ftco-animate">
            
              <h2 class="" style="line-height:1"><span>FAQS</span></h2>
            </div>
          </div>
          <div class="row mob-faq-row  no-gutters ml-5">
          
          <div class="block-3 w-100 d-md-flex ftco-animate" data-scrollax-parent="true">
            
        <div class="accordion flow mt-5">

        <div class="accordion__item">
            <h2 id="accordion__trigger-1" class="accordion__item--trigger" aria-expanded="false" aria-controls="accordion__panel-1">
                What Is SEO?
            </h2>
            <div id="accordion__panel-1" class="accordion__item--panel" role="region" aria-labelledby="accordion__trigger-1">
                <p>It is the process of getting organic traffic to the webpage through search engines. It increases the quantity as well the quality of traffic. It is a long term beneficial process for the website.</p>
            </div>
        </div>

        <div class="accordion__item">
            <h2 id="accordion__trigger-2" class="accordion__item--trigger" aria-expanded="false" aria-controls="accordion__panel-2">
                What are the major factors of SEO?
            </h2>
            <div id="accordion__panel-2" class="accordion__item--panel" role="region" aria-labelledby="accordion__trigger-2">
                <p>SEO is dependent on a number of factors, i.e. content used on websites, visual display relating to the niche, backlinks creator for the website and association throughout the website. </p>
            </div>
        </div>

        <div class="accordion__item">
            <h2 id="accordion__trigger-3" class="accordion__item--trigger" aria-expanded="false" aria-controls="accordion__panel-3">
                What is Technical SEO ?
            </h2>
            <div id="accordion__panel-3" class="accordion__item--panel" role="region" aria-labelledby="accordion__trigger-3">
                <p>It is a process in which we optimize the server of the website so that the search engine bots and spiders can crawl the whole website to find the required data to optimize the web page. </p>
            </div>
        </div>

        <div class="accordion__item">
            <h2 id="accordion__trigger-4" class="accordion__item--trigger" aria-expanded="false" aria-controls="accordion__panel-4">
                How much does e-commerce SEO cost?
            </h2>
            <div id="accordion__panel-4" class="accordion__item--panel" role="region" aria-labelledby="accordion__trigger-4">
                <p>Ecommerce SEO doesn’t cost a dime if you are doing it yourself. It surely takes a lot of time and effort and search engine policy follows. Cost of SEO experts varies depending on website size.  </p>
            </div>
        </div>

    </div>

          </div>
         
        </div>
        </div>
      </section>

<script type="text/javascript">
  
	 function formsec(){
			 document.getElementById('seo-form-sec').scrollIntoView(true);
		
		 }
	
  function  pformsubmit() {
  var qurl ="<?php bloginfo('template_directory'); ?>/mail.php";
//   var seo ="<?php bloginfo('template_directory'); ?>/template-seo.php";
			

   
      let pform = document.getElementById("pform");
    let fd = new FormData(pform);
  

    $.ajax({
        url: qurl,
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (res) {
     var result = $.parseJSON(res);
   
     $("#seo-message").html(result); 
     document.getElementById("pform").reset();
     window.setTimeout( window.location.href='https://software-craft.com/seo-services/', 25000 );
  
            
        }
    });
    return false;

  }




</script>
    
    
      




   <?php get_footer(); ?>