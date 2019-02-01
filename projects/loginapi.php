<?php
if(isset($_GET["uname"])){
    $un=$_GET["uname"];
    
    
    $serv="localhost";
    $dbname="sample";
    $usname="root";
    $pswda="";
    $con=new mysqli($serv,$usname,$pswda,$dbname);
    $r=array();
    
    $sql="SELECT * FROM `details` WHERE `mobile`='$un'";
    $resulr=$con->query($sql);
    
       
if($resulr->num_rows>0){
    while ($row=$resulr->fetch_assoc()){
        
        $r['status']=$row;
        
//        $mob=$row['mobile'];
//       
//        $name=$row['name'];
//        $ad=$row['address'];
//        $usr=$row['username'];
//        $em=$row['email'];
        
    }
    
//    if($un==$mob){
//    
//            $r['status']="success <br><br>";
//            
//            echo $name."<br>";
//            echo $ad."<br>";
//            echo $em."<br>";
//            echo $mob."<br>";
//            echo $usr."<br>";
//            
//    
//        }
//        else
//        {
//            $r['status']="failed";
//    
//        }
    echo json_encode($r);

    
}
}