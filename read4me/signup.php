<?php

if(isset($_POST["fname"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["uage"];
    $gen=$_POST["gender"];
    $mob=$_POST["mobile"];
    $mail=$_POST["email"];
    $paswd=$_POST["pass"];
    
    $serv="localhost";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="INSERT INTO `user_data`(`f_name`, `l_name`, `age`, `gender`, `mobile`, `mail`, `passwd`) VALUES ('$fname','$lname','$age','$gen','$mob','$mail','$paswd')";
    $resulr=$con->query($sql);
    
    if($resulr===TRUE){
    $r['status']="success";
    
}
else
{
    $r['status']="failed";
    
}
    echo json_encode($r);

}


