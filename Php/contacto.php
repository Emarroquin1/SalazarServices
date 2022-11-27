<?php

$validador1=false;
$validador2=false;
$validador3=false;
$validador4=false;


if($_SERVER["REQUEST_METHOD"] == "POST"){


 
if(empty($_POST['phone'])) {

$phone_error = "Phone is required";

}

else{
        $phone= $_POST['phone'];
        $phone= test_input($_POST['phone']);

        $validador1 =True;
    
}

 
if(empty($_POST['email'])) {

    $email_error = "Email is required";
    
    }
    
    else{
        $email= $_POST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $email_error = "The email is not in the correct format";
}
else{
           
            $email= test_input($_POST['email']);
            $validador2 =True;
    }

    }

     
if(empty($_POST['coment'])) {

    $coment_error = "coment is required";
    
    }else{
        $coment= $_POST['coment'];
        $coment= test_input($_POST['coment']);
        $validador3 =True;
    }
   
   

   $servicios =  array();

if(isset($_POST['servicios'])){

    $servicios = $_POST['servicios'];

   


}else {
    $servicios=[];
}



if(  $servicios==""|| count($servicios) <1 ){

    $servicios_error = "selected at least 1 service";

}else{
    $validador4=true;
}

if($validador1==true && $validador2==true && $validador3==true && $validador4==true){
    

    $sender= $_POST['email'];
    $coment= $_POST['coment'];
    $phone= $_POST['phone'];

    $servicio ="Servicios consultados: ";
   
    foreach ($servicios as $serviciosArray){

        $servicio .= $serviciosArray;
    }
    
    
    $receiver= "1emarroquinn1@gmail.com";

    $send = "Sender: ".$sender."\n"."Coment: ".$coment."\n"."Phone: ".$phone;
    
    
    
    
   
    
    $header ="From: ".$sender."\r\n";
    $header .="Reply-To: ".$sender."\r\n";
    $mail = @mail($receiver,$servicio,$send,$header);
    
    if($mail){
        echo"<script>alert('Form sent successfully')</script>";
    }
       
  

}

}








function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }