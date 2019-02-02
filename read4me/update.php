<?php

if(isset($_GET["fname"])){
    $fname=$_GET["fname"];
    $lname=$_GET["lname"];
    $age=$_GET["uage"];
    $gen=$_GET["gender"];
    $mob=$_GET["mobile"];
    $email=$_GET["email"];
   
    
    $serv="localhost";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="UPDATE `user_data` SET `f_name`='$fname',`l_name`='$lname',`age`=$age,`gender`='$gen',`mobile`='$mob' WHERE `mail`='$email'";
    $resulri=$con->query($sql);
    
    if($resulri===TRUE){
    $r['status']="success";
    
    }
    else
    {
    $r['status']="failed";
    
    }
    echo json_encode($r);
    }
    

