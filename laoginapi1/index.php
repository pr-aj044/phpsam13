<?php
if(isset($_GET["uname"])){
    $uname=$_GET["uname"];
    $pass=$_GET["pasd"];
    
    $serv="localhost";
    $dbname="sample";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    
}
