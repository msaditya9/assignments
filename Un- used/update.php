<!DOCTYPE html>
<html>


<head>
        

       <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300italic,300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,100,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'>
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="css/style1.css">

    
</head>




<?php

include_once("connect.php");


if (isset($_POST['Submit'])){
    $brandid=$_POST['brand_id'];
    $model=$_POST['model'];
	echo $model;
    $type=$_POST['type'];
    $color=$_POST['color'];
    $price  = $_POST['price'];
	
 // if (isset($_POST['submit'])){
  $update_query="update specifications set model='$model',price='$price',type='$type',color='$color' where brand_id='$brandid'";
  $result2 = mysqli_query($conn, $update_query);
  }
   if ($result2==1){
   echo "<script>alert('stock updated successfully')</script>";
   // echo "<script>setTimeout(\"location.href = adminupdate.php\",100);</script>";
   
   //exit();
   }
   else{
   echo "Opps something went wrong!";
   }
?>

</html>


