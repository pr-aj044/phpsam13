<?php

if(isset($_GET["fname"])){
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    $age=$_GET["uage"];
    $gen=$_GET["gender"];
    $mob=$_GET["mobile"];
    $mail=$_GET["email"];
    $paswd=$_GET["pass"];
    
    $serv="localhost";
    $dbname="user_data";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="INSERT INTO `user_data`(`f_name`, `l_name`, `age`, `gender`, `mobile`, `mail`, `passwd`) VALUES ('$fname','$lname',$age,'$gen',$mob,'$mail','$paswd')";
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


