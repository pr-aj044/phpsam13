
<?php

if(isset($_GET['name']))
{
    $x=$_GET['name'];
    $y=$_GET['adres'];
    $m=$_GET['mob'];
    $e=$_GET['email'];
    $un=$_GET['uname'];
    $ps=$_GET['pswd'];
    
$serv="localhost";
$dbname="sample";
$uname="root";
$pswda="";
$con=new mysqli($serv,$uname,$pswda,$dbname);
$r=array();
$sql="INSERT INTO `details`(`name`, `address`, `mobile`, `email`, `username`, `password`) VALUES ('$x','$y',$m,'$e','$un','$ps')";
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