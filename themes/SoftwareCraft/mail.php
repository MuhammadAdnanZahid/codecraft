<?php  

// Get A Quote Script


if(isset($_POST['qname'])) {
 $mailto = "info@software-craft.com";  //My email address
 //getting customer data
 $qname = $_POST['qname']; //getting customer name
 $qemail = $_POST['qemail']; //getting customer email
 $qaddress = $_POST['qaddress']; //getting customer Address
 $qphone = $_POST['qphone']; //getting customer Phome number
 $qproject = $_POST['qproject']; //getting customer project
 $qmessage = $_POST['qmessage']; //getting subject line from client
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message = "Cleint Name: " . $qname . "\n"
 . "Phone Number: " . $qphone . "\n\n"
 . "Client Address: " . $qaddress . "\n\n"
 . "Project Idea: " . $qproject . "\n\n"
 . "Client Message: " . "\n" . $_POST['qmessage'];

 //Message for client confirmation
 $message2 = "Dear  " . $qname . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $qmessage . "\n\n"
 . "Regards," . "\n" . "- software Craft";

 //Email headers
 $headers = "From: " . $qemail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $qproject, $message, $headers); // This email sent to My address
  $result2 = mail($qemail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
    // $type = "success";
    // $success = "Your Message was sent Successfully!";
    // echo "mail sent";
  } else {
    $error = '<div class="alert alert-danger d-inline-block" role="alert">Something went wrong, please try again.</div>';
    echo json_encode($error);
    // $failed = "Sorry! Message was not sent, Try again Later.";
    // echo "mail not sent";
  }

}

// Schedule Meeting Script

if(isset($_POST['mname'])) {
 $mailto = "info@software-craft.com";  //My email address
 //getting customer data
 $mname = $_POST['mname']; //getting customer name
 $memail = $_POST['memail']; //getting customer email
 $mdate = $_POST['mdate']; //getting Meeting date
 $mtime = $_POST['mtime']; //getting Meeting Time
 $msocial = $_POST['msocial']; //getting Meeting Plateform
 $msubject = $_POST['msubject']; //getting subject line from client
	$subject1 = "New Message From:". $mname; 
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message = "Cleint Name: " . $mname . "\n"
 . "Client Emial: " . $memail . "\n\n"
 . "Meeting Date: " . $mdate . "\n\n"
 . "Meeting Time: " . $mtime . "\n\n"
 . "Meeting Plateform: " . $msocial . "\n\n"
 . "Meeting Subject: " . "\n" . $_POST['msubject'];

 //Message for client confirmation
 $message2 = "Dear  " . $mname . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $msubject . "\n\n"
 . "Regards," . "\n" . "- software Craft";

 //Email headers
 $headers = "From: " . $memail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $subject1, $message, $headers); // This email sent to My address
  $result2 = mail($memail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
   $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
  } else {
     $error = '<div class="alert alert-danger d-inline-block" role="alert">Something went wrong, please try again.</div>';
    echo json_encode($error);
  }

}

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/Exception.php';
// require 'phpmailer/PHPMailer.php';
// require 'phpmailer/SMTP.php';




// Get Hire Script


if(isset($_POST['hname'])) {
 $mailto = "hr@software-craft.com";  //My email address
 //getting customer data
 $hname = $_POST['hname']; //getting customer name
 $hemail = $_POST['hemail']; //getting customer email
 $hposition = $_POST['hposition']; //getting customer Address
 $hphone = $_POST['hphone']; //getting customer Phome number
 $hexp = $_POST['hexp']; //getting subject line from client
	$filenameee =  $_FILES['hfile']['name'];
    $fileName = $_FILES['hfile']['tmp_name']; 

	
	$subject1 = "New Application From:". $hname; 
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message ="Candidate Name = " . $hname . "\r\n Candidate Number = " . $hphone . "\r\n Applied Position = " . $hposition . "\r\n Candidate Experience = " . $hexp."year";

 //Message for client confirmation
//  $message2 = "Dear  " . $hname . "\n"
//  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
//  . "You Applied for following Position: " . "\n" . $hposition . "\n\n"
//  . "Regards," . "\n" . "- software Craft";

 //Email headers

//  $headers = "From: " . $hemail;
//  $headers2 = "From: " . $mailto; // This will receive client
	
// 	----------------------  File Attachment
	
	  $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";
    // main header (multipart mandatory)
    $headers = "From: ".$hname." <".$hemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;
    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol . $eol;
    $body .= $content . $eol . $eol;
    $body .= "--" . $separator . "--";

	

 //PHP mailer function

  $result1 = mail($mailto, $subject1, $body, $headers); // This email sent to My address
//   $result2 = mail($hemail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1) {
    $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
    // $type = "success";
    // $success = "Your Message was sent Successfully!";
    // echo "mail sent";
  } else {
    $error = '<div class="alert alert-danger d-inline-block" role="alert">Something went wrong, please try again.</div>';
    echo json_encode($error);
    // $failed = "Sorry! Message was not sent, Try again Later.";
    // echo "mail not sent";
  }

}




// Inpage Form Script


if(isset($_POST['pname'])) {
 $mailto = "info@software-craft.com";  //My email address
 //getting customer data
 $pname = $_POST['pname']; //getting customer name
 $pemail = $_POST['pemail']; //getting customer email
 $paddress = $_POST['paddress']; //getting customer Address
 $pphone = $_POST['pphone']; //getting customer Phome number
 $pmessage = $_POST['pmessage']; //getting subject line from client
	$subject1 = "New Message From:". $pname; 
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message = "Cleint Name: " . $pname . "\n"
 . "Phone Number: " . $pphone . "\n\n"
 . "Client Address: " . $paddress . "\n\n"
 . "Client Message: " . "\n" . $_POST['pmessage'];

 //Message for client confirmation
 $message2 = "Dear  " . $pname . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $pmessage . "\n\n"
 . "Regards," . "\n" . "- software Craft";

 //Email headers
 $headers = "From: " . $pemail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $subject1, $message, $headers); // This email sent to My address
  $result2 = mail($pemail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
    // $type = "success";
    // $success = "Your Message was sent Successfully!";
    // echo "mail sent";
  } else {
    $error = '<div class="alert alert-danger d-inline-block" role="alert" style="magin-top:-40px;">Something went wrong, please try again.</div>';
    echo json_encode($error);
    // $failed = "Sorry! Message was not sent, Try again Later.";
    // echo "mail not sent";
  }

}

// Footer Form

if(isset($_POST['fname'])) {
 $mailto = "info@software-craft.com";  //My email address
 //getting customer data
 $fname = $_POST['fname']; //getting customer name
 $femail = $_POST['femail']; //getting customer email
 $fmessage = $_POST['fmessage']; //getting subject line from client
	$subject1 = "New Message From:". $fname; 
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message = "Cleint Name: " . $fname . "\n"
 . "Client Message: " . "\n" . $_POST['fmessage'];

 //Message for client confirmation
 $message2 = "Dear  " . $fname . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $fmessage . "\n\n"
 . "Regards," . "\n" . "- software Craft";

 //Email headers
 $headers = "From: " . $femail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $subject1, $message, $headers); // This email sent to My address
  $result2 = mail($femail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
    // $type = "success";
    // $success = "Your Message was sent Successfully!";
    // echo "mail sent";
  } else {
    $error = '<div class="alert alert-danger d-inline-block" role="alert">Something went wrong, please try again.</div>';
    echo json_encode($error);
    // $failed = "Sorry! Message was not sent, Try again Later.";
    // echo "mail not sent";
  }

}


// ------------ CASE STUDY FORMS  



if(isset($_POST['csname'])) {
 $mailto = "adnan.softwarecraft@gmail.com";  //My email address
 //getting customer data
 $csname = $_POST['csname']; //getting customer name
 $csemail = $_POST['csemail']; //getting customer email
 $csphone = $_POST['csphone']; //getting customer Phome number
 $csmessage = $_POST['csmessage']; //getting subject line from client
	$subject1 = "New Message From:". $csname; // For customer confirmation
 $subject2 = "Confirmation: Message was submitted successfully | Software Craft"; // For customer confirmation

 //Email body I will receive
 $message = "Cleint Name: " . $csname . "\n"
 . "Phone Number: " . $csphone . "\n\n"
 . "Client Message: " . "\n" . $_POST['csmessage'];

 //Message for client confirmation
 $message2 = "Dear  " . $csname . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $csmessage . "\n\n"
 . "Regards," . "\n" . "- software Craft";

 //Email headers
 $headers = "From: " . $csemail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $subject1, $message, $headers); // This email sent to My address
  $result2 = mail($csemail, $subject2, $message2, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $message ='<div class="alert alert-success d-inline-block" role="alert">Your message has been sent.</div>';
    echo json_encode($message);
    // $type = "success";
    // $success = "Your Message was sent Successfully!";
    // echo "mail sent";
  } else {
    $error = '<div class="alert alert-danger d-inline-block" role="alert" style="magin-top:-40px;">Something went wrong, please try again.</div>';
    echo json_encode($error);
    // $failed = "Sorry! Message was not sent, Try again Later.";
    // echo "mail not sent";
  }

}










?>