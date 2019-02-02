<?php
if(isset($_GET["hvuser"])){
    
    $user=$_GET["hvuser"];
    $pswd=$_GET["hvpass"];

    $serv="localhost";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="DELETE FROM `user_data` WHERE `mail`='$user' AND `passwd`='$pswd' ";
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
    
