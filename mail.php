<?php 

//echo "we are on footer page..";

    $name = $_REQUEST['contact_name'];
    $mailForm = $_REQUEST['contact_email'];
    $phone = $_REQUEST['contact_phone'];
    
    $cer=$_REQUEST['cer'];
   

    $mailTo = "pratyux@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "Find New Appoinment.\n Name : ".$name.".\n Email : ".$mailForm. ".\n Phone : ".$phone. "\n Inquery For :".$cer;

    mail($mailTo,"New Request for appoinment : $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>






  