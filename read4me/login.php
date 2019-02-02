<?php
if(isset($_GET["hvuser"])){
    
    $user=$_GET["hvuser"];
    $pswd=$_GET["hvpass"];

    $serv="192.168.43.41";
    $dbname="read4me";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="SELECT * FROM `user_data` WHERE `mail`='$user'";
    $resulr=$con->query($sql);
    
    if($resulr->num_rows>0){
    while ($row=$resulr->fetch_assoc()){
     
        $usr=$row['mail'];
        $psd=$row['passwd'];
   
    }
    
    }
    if($usr==$user&&$psd==$pswd){
        echo "login success";
    }
 else {
        echo "login fail";    
    }
}