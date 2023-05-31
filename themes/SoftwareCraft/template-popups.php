 <!-- Get Quote FORM -->

      <div id="quote-Overlay" class="quote-overlay mob-quote-overly">
  <span class="closebtn" onclick="closeQuote()" title="Close Overlay">×</span>
  <div class=" quote-main mob-quote-main mt-4 d-flex">
    <div class="quote-overlay-content quote-left mob-quote-left">
    <h2 class="mb-5" style="color: #9EC124; font-weight: 700;">Get a QUOTE!</h2>
    <img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Symbol.png" width=200 height=210>
  </div>
   <div class="quote-overlay-content quote-right mob-quote-right">
     
    <form class="quote-form mob-quote-form" method="POST" id="qform" name="qform" onsubmit="return qformsubmit()">
      <span id="quote-message"></span>
       <div class="form-row mob-form-row">
          <div class="form-group w-100">
              <i style="color:#9EC124;position: absolute; padding:12px; margin-left:-22%;" class="fas fa-user-alt"></i><input type="text" class="form-control" id="qname" name="qname" placeholder="Full Name" required="">
              
            </div>
                       
            <div class="form-group w-100">
              <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="far fa-paper-plane"></i><input type="email" class="form-control" id="qemail" name="qemail" placeholder="Email" required="">
            </div>
              <div class="form-group w-100">
                  <i style=" color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="fas  fa-location-dot"></i><input type="text" class="form-control"  id="qaddress" name="qaddress" placeholder="Address">
                </div>
                <div class="form-row mob-form-row w-100"style="margin-left: 2px;">
                  <div class="form-group mob-phone-group mr-4" style="width:45%">
                    <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-10%; " class="fa fa-phone"></i><input type="text" class="form-control" id="qphone" name="qphone" placeholder="Phone no." required="">
                  </div>
                <div class="form-group mob-proj-group ml-3" style="width:45%">
                  <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-10%;" class="fas fa-tools"></i><input type="text" class="form-control" id="qproject" name="qproject" placeholder="Project">
                 </div>
                </div>
                        
                <div class="form-group w-100">
                  <textarea type="textarea" class="form-control" style="text-indent:0px" rows="5" cols="20" id="qmessage" name="qmessage" placeholder="Project Details..."></textarea>
                </div>
                <div class="w-100"><button type="submit" id="qsubmit" name="qsubmit" class="w-100 btn btn-md" style="float: right;background-color: #9EC124; color: #fff; opacity: 1; padding: 5px 30px; border-radius: 3%;" >Submit</button></div>
                </div>

    </form>
  </div>

  </div>
  
</div><!-- END Get Quote FORM -->

<!-- MEETING FORM -->

      <div id="meeting-Overlay" class="quote-overlay mob-quote-overly">
  <span class="closebtn" onclick="closeMeeting()" title="Close Overlay">×</span>
  <div class=" quote-main mob-quote-main mt-4 d-flex">
    <div class="quote-overlay-content quote-left mob-quote-left">
    <h2 class="mb-5" style="color: #9EC124; font-weight: 700;">Let's Schedule!</h2>
    <img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Symbol.png" width=200 height=210>
  </div>
   <div class="quote-overlay-content quote-right mob-quote-right">
    <form class="quote-form mob-quote-form" method="POST"  id="mform" name="mform"  onsubmit="return  mformsubmit()">
      <span id="meet-message"></span>
       <div class="form-row mob-form-row">
          <div class="form-group mb-4  w-100">
              <i style="color:#9EC124;position: absolute; padding:12px; margin-left:-22%;" class="fas fa-user-alt"></i><input type="text" class="form-control" name="mname" id="mname" placeholder=" Name" required="">
            </div>
                       
            <div class="form-group mb-4 w-100">
              <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="far fa-paper-plane"></i><input type="email" class="form-control" name="memail" id="memail" placeholder="Email" required="">
            </div>
                <div class="form-row mob-form-row w-100"style="margin-left: 2px;">
                  <div class="form-group mob-phone-group  mr-4" style="width:45%">
                    <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-10%; " class="far fa-calendar-alt"></i><input type="text" class="form-control" name="mdate" id="appointment_date" placeholder="Date">
                  </div>
                <div class="form-group mb-4 ml-3 mob-proj-group" style="width:45%">
                  <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-10%;" class=" far fa-clock"></i><input type="text" class="form-control"name="mtime" id="mtime" placeholder="Time">
                 </div>
                </div>

                 <div class="form-group mb-4 w-100">
                <!--  <i style=" color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="fab fa-whatsapp"></i><input type="text" class="form-control"  id="inputEmail4" placeholder="Whatsapp"> -->
                   <select class="form-control" id="msocial" name="msocial">
                    <option><i class="fab fa-facebook-f" style="font-size:14px;" aria-hidden="true"></i> WhatsApp</option>
                    <option>Google Meet</option>
                    <option>ZOOM</option>
                    <option>SKYPE</option>
                    
                  </select>
                </div>
                <div class="form-group mb-5 w-100">
                  <i style=" color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="fa fa-bars"></i><input type="text" class="form-control" name="msubject"  id="msubject" placeholder="Subject">
                </div>
                        
                
                <div class="w-100"><button type="submit" name="msubmit" class="w-100 btn btn-md" style="float: right;background-color: #9EC124; color: #fff; opacity: 1; padding: 5px 30px; border-radius: 3%;">Submit</button></div>
                </div>
    </form>
  </div>

  </div>
  
</div><!-- END Meeting FORM -->



<!-- Get Hire -->

      <div id="apply-Overlay" class="quote-overlay mob-quote-overly">
  <span class="closebtn" onclick="closeApply()" title="Close Overlay">×</span>
  <div class=" quote-main mob-quote-main mt-4 d-flex">
    <div class="quote-overlay-content quote-left mob-quote-left">
    <h2 class="mb-5" style="color: #9EC124; font-weight: 700;">Let's Schedule!</h2>
    <img src="<?php bloginfo('template_directory'); ?>/assets/homepage/Symbol.png" width=200 height=210>
  </div>
   <div class="quote-overlay-content quote-right mob-quote-right">
    <form class="quote-form mob-quote-form" method="POST"  id="hform" name="hform"  onsubmit="return  hformsubmit()" enctype="multipart/form-data">
      <span id="hire-message"></span>
       <div class="form-row mob-form-row">
          <div class="form-group mb-4  w-100">
              <i style="color:#9EC124;position: absolute; padding:12px; margin-left:-22%;" class="fas fa-user-alt"></i><input type="text" class="form-control" id="hname" name="hname" placeholder=" Name" required="">
            </div>
                       
            <div class="form-group mb-4 w-100">
              <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="far fa-paper-plane"></i><input type="email" class="form-control" id="hemail" name="hemail" placeholder="Email" required="">
            </div>

                 <div class="form-group mb-4 w-100">
                  <i style=" color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="fa fa-briefcase"></i><input type="text" class="form-control"  id="hposition" name="hposition" placeholder="Position">
                </div>
                 <div class="form-group mob-phone-group w-100  mb-4" style="width:45%">
                    <i style="color:#9EC124; position: absolute; padding:12px; margin-left:-22%; " class="far fa-calendar-alt"></i><input type="text" class="form-control" name="hphone" id="hphone" placeholder="Phone no." required="">
                  </div>
                <div class="form-group mb-5 w-100">
                  <i style=" color:#9EC124; position: absolute; padding:12px; margin-left:-22%" class="fa fa-bars"></i><input type="text" class="form-control"  id="hexp" name="hexp" placeholder="year of Experience">
                </div>
                 <div class="form-group mb-5 w-100">
                 <input type="file" class="form-control-file" id="hfile" name="hfile">
                </div>
                        
                
                <div class="w-100"><button type="submit" name="hsubmit" class="w-100 btn btn-md" style="float: right;background-color: #9EC124; color: #fff; opacity: 1; padding: 5px 30px; border-radius: 3%;" >Submit</button></div>
                </div>
    </form>
  </div>

  </div>
  
</div><!-- END Get Hire -->



     


<script>


// 	------------ SUBMIT QUOTE FUNCTION -------------------
  
  
function  qformsubmit() {
  var qurl ="<?php bloginfo('template_directory'); ?>/mail.php";
//   var home ="<?php bloginfo('template_directory'); ?>/front-page.php";


   
      let qform = document.getElementById("qform");
    let fd = new FormData(qform );
  

    $.ajax({
        url: qurl,
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
         success: function (res) {
     var result = $.parseJSON(res);
     $("#quote-message").html(result); 
     document.getElementById("qform").reset();
	 window.setTimeout( window.location.href='https://software-craft.com/', 25000 );
  
            
        }
    });
    return false;

  }
	
// 	-----------------------  SCHEDULE MEETING FORM ------------------------


  function  mformsubmit() {
  var qurl ="<?php bloginfo('template_directory'); ?>/mail.php";
//   var home ="<?php bloginfo('template_directory'); ?>/front-page.php";


   
      let mform = document.getElementById("mform");
    let fd = new FormData(mform );
  

    $.ajax({
        url: qurl,
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (res) {
     var result = $.parseJSON(res);
     $("#meet-message").html(result); 
     document.getElementById("mform").reset();
     window.setTimeout( window.location.href='https://software-craft.com/', 25000 );
  
            
        }
    });
    return false;

  }
	
// 	----------------------------- HIRING FORM ------------------------

  function  hformsubmit() {
  var qurl ="<?php bloginfo('template_directory'); ?>/mail.php";
//   var career ="<?php bloginfo('template_directory'); ?>/template-careers.php";


   
      let mform = document.getElementById("hform");
    let fd = new FormData(hform );
  

    $.ajax({
        url: qurl,
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (res) {
     var result = $.parseJSON(res);
    
     $("#hire-message").html(result); 
     document.getElementById("hform").reset();
     window.setTimeout( window.location.href='https://software-craft.com/careers/', 25000 );
  
            
        }
    });
    return false;

  }



    

  
</script>
