<?php
include 'firstimport.php';
	
$id = $_GET['buyid'];
$sql = "select * from trade where tradeid='$id'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    foreach($result as $row){
        $crop = $row['crop'];
        $quantity = $row['quantity'];
        $baseprice = $row['baseprice']; 
    }
    $sql2 = "insert into `ord` (orderid,tradeid,crop,quantity,baseprice) values('','$id','$crop','$quantity','$baseprice');";
    $result3 = mysqli_query($conn,$sql2);
}

if(isset($_GET['buyid'])){
        
        $sql1 = "delete from trade where tradeid='$id'";
        $result2 = mysqli_query($conn,$sql1);
	    if($result2){
		    header("location:myorder.php");
    	}
    
}
?>