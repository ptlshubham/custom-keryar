<?php 
//echo "we are on footer page..";

    $fname = $_REQUEST['contact_fname'];
    $sname = $_REQUEST['contact_sname'];
    $mailForm = $_REQUEST['contact_email'];
    $cname = $_REQUEST['contact_cname'];
    $address = $_REQUEST['contact_message'];
    $phone = $_REQUEST['contact_phone'];
    $job = $_REQUEST['contact_job'];
     $dropone = $_REQUEST['contact_dropone'];
     $droptwo = $_REQUEST['contact_droptwo'];

     

    $mailTo = "maitrihpatel@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$dropone. "\n Value 2 :".$droptwo;

    mail($mailTo,"New client Detail : $fname", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$fname. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>