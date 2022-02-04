<?php 
//echo "we are on footer page..";

    $fname = $_REQUEST['contact_fname'];
    $sname = $_REQUEST['contact_sname'];
    $mailForm = $_REQUEST['contact_email'];
    $cname = $_REQUEST['contact_cname'];
    $address = $_REQUEST['contact_message'];
    $phone = $_REQUEST['contact_phone'];
    $job = $_REQUEST['contact_job'];
     $main = $_REQUEST['ddlViewBy'];
     
     if ($main == 'Digital Marketing') {
        $sub = $_REQUEST['tab6'];
        $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$main. "\n Value 2 :".$sub;
      
    }
    else if ($main == 'Website Development') {
        $sub = $_REQUEST['tab3'];
        $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$main. "\n Value 2 :".$sub;
       

    }
    else if ($main == 'Mobile-App Development') {
        $sub = $_REQUEST['tab2'];
        $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$main. "\n Value 2 :".$sub;
        echo $txt;

    }
    else if ($main == 'Social Media Marketing') {
        $sub = $_REQUEST['tab5'];
        $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$main. "\n Value 2 :".$sub;
        

    }
    else {
        $sub = $_REQUEST['tab4'];
        $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$main. "\n Value 2 :".$sub;
       
    }
     
     

     

    $mailTo = "hello@keryar.com";
    $headers = "From: ".$mailForm;
   
    // $txt = "Find New Details.\n First Name : ".$fname. ".\n Last Name : ".$sname. " .\n Email : ".$mailForm. ".\n Company Name :".$cname.".\n Address :".$address. ".\n Phone :".$phone. "\n Job :".$job. "\n Value 1 :".$mian. "\n Value 2 :".$sub;

     mail($mailTo,"New client Detail : $fname", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$fname. " \n We contact You soon...";
  
   
   
   
    mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>