<?php

print_r($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST"){


 
if(!empty($_POST['phone'] {

}




else{
    $phone= $_POST['phone'];
    $phone= test_input($_POST['phone']);
  



}


 

 

}






}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }