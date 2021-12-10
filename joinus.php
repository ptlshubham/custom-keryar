<?php 
//echo "we are on footer page..";

    $mailForm = $_REQUEST['form_email'];    
    $name = $_REQUEST['form_name'];
    $phone = $_REQUEST['form_phone'];
    $address = $_REQUEST['form_message'];
    $city = $_REQUEST['form_city'];
    $zip = $_REQUEST['form_zip'];
    $country = $_REQUEST['form_country'];
    $state = $_REQUEST['form_state'];
    $des = $_REQUEST['form_des'];
    $one = $_REQUEST['form_one'];
    $two = $_REQUEST['form_two'];
    $three = $_REQUEST['form_three'];
    $four = $_REQUEST['form_four'];
    $five = $_REQUEST['form_five'];
    
    
     

    $mailTo = "rumeet22@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "Find New Details.\n Email : ".$mailForm. ".\n Name : ".$name. " .\n Phone : ".$phone. ".\n City :".$city.".\n Address :".$address. ".\n Zip :".$zip. ".\n State :".$state. ".\n Description : ".$des. ".\n Ans1 :".$one. ".\n Ans2 :".$two. ".\n Ans3 :".$three. ".\n Ans4 :".$four. ".\n Ans5 :".$five;

    mail($mailTo,"New client Detail : $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$fname. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>