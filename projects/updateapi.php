<?php
if(isset($_GET["mobile"])){
    $un=$_GET["mobile"];
    $nm=$_GET["name"];
    $ad=$_GET["adres"];
    $em=$_GET["email"];
    
    $serv="localhost";
    $dbname="sample";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="UPDATE `details` SET `name`='$nm',`address`='$ad',`email`='$em' WHERE `mobile`='$un'";
    
    $resulri=$con->query($sql);
    $sqli="SELECT * FROM `details` WHERE `mobile`=$un";
    $resulr=$con->query($sqli);   
if($resulr->num_rows>0){
    while ($row=$resulr->fetch_assoc()){
        
        $r['status']="success";
        
        $mob=$row['mobile'];
        $name=$row['name'];
        $ad=$row['address'];
        $em=$row['email'];
        
    }

    echo json_encode($r);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
}}
