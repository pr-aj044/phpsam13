
<?php

if(isset($_POST['name']))
{
    $x=$_POST['name'];
    $y=$_POST['course'];
    $m=$_POST['phone'];

$serv="localhost";
$dbname="sample";
$uname="root";
$pswda="";
$con=new mysqli($serv,$uname,$pswda,$dbname);
$r=array();
$sql="INSERT INTO `test`(`name`, `course`, `phone`) VALUES ('$x','$y',$m)";
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