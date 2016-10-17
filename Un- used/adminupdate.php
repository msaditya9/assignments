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

<body>
<h1>Update stock</h1>
<fieldset style="width:700px;">
<legend>Select model Id</legend>
<form action="" method="POST">
<?php

include_once("connect.php");

$sql = "SELECT brand_id FROM specifications";
$result = mysqli_query($conn,$sql);
echo "<select name='brand_id'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['brand_id'] . "'>" . $row['brand_id'] . "</option>";
}
echo "</select>";
?><br><br>
<input type="submit" name = "get details" value="get details">
</form>
<?php
//if (isset($_POST['get details'])){
@$value=$_POST['brand_id'];
echo "Details for Brand ID: $value";
$details="select * from specifications where brand_id ='$value'";
$result1 = mysqli_query($conn,$details);
while ($row = mysqli_fetch_array($result1)) {
?>
</fieldset>
<fieldset>
<form action="update.php" method = "POST">
<fieldset>
<legend>Camera Details</legend>
Brand ID:<br>
<input type="text" name="brand_id" value="<?php echo $row['brand_id']; ?>">
<br>
Model :<br>
<input type="text" name="model" value="<?php echo $row['model']; ?>">
<br>
Type:<br>
<input type="text" name="type" value="<?php echo $row['type']; ?>">
<br>
Color:<br>
<input type="text" name="color" value="<?php echo $row['color']; ?>">
<br>
Price:<br>
<input type="text" name="price" value="<?php echo $row['price']; ?>">

<br><br>
<input type="submit" name="Submit" value="UPDATE"></fieldset>
</form>
<?php
}

?>
</fieldset>

</body>
</html>
