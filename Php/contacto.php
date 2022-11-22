<?php
if(isset($_POST['send'])){
if(!empty($_POST['phone']) && !empty($_POST['email']) !empty($_POST['coment']))
{
$send = $_POST['phone'];
$email= "1emarroquinn1@gmail.com"
$email2= $_POST['email']
$coment =$_POST['coment'];
$header ="From: noreply@example.com"."\r\n";
$header .="Reply-To: noreply@example.com"."\r\n";
$header .="X-Mailer: PHP/". phpversion();
$mail = @mail($email,$coment,$phone,$header);

if($mail){
    
    echo"<h4>!Mail enviado exitosamente</h4>"
}

}

}