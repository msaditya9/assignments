
<?php

include 'connect.php';

//Brewery Query for Related data dropdown
$sql = "SELECT id, brandname FROM brand";
$brand = $conn->query($sql);


//Check if a beer_id was supplied in the URL Query Parameter
if (isset($_GET['idhere'])) {

  $idhere = $_GET['idhere'];

  //Query DB for details on that beer
  $brandsql = "SELECT * FROM specifications where id = $idhere";

  $result =  $conn->query($brandsql)->fetch_assoc();

}

?>
<!DOCTYPE html>
<html>
<head>
      <?php
            include 'links.php';
      ?>
</head>

<body background="images/image.jpg">



   <!--View stock on first page-->
    
    <?php
     include 'connect.php';

        $sql = "SELECT
        brand.id, brandname,
        specifications.brand_id, model, type, color, price
        FROM brand JOIN specifications ON brand.id = specifications.brand_id";
        $result = $conn->query($sql);
    ?>
  

<div class="container">
    <form action="addbrand.php" method="post" >
    <h1>CAMERA STORE</h1>

        <div>
            <label for="brand"></label>
                <input type="text" class="name" placeholder="Brand" title="Brand should only contain letters." name="brand" aria-describedby="name-format" required/>
                
                


            <!--<input class="name" type="text" placeholder="BRAND" name="brand"/>
            <p class="name-help">Please enter a valid brand</p>
            [Nn]ikon|[Cc]anon|[Ss]ony|[Gg]opro-->
        
                </div>

                <div >
            <button class="button first-button" type="submit">NEXT</button>
        </div>
        
    </form>
    
        <br><br>
        <a href="view2.php"><button class="button next-button"><span>VIEW STOCK</span></button></a>
        <br><br>

   <!--<br>
    <form action="admindelete.php" method="post" >
        <div>
            <button class="button next-button" type="submit"><span>DELETE STOCK</span></button>
        </div>
    </form>

    
    <form action="adminupdate.php" method="post" >
        <div>
            <button class="button next-button" type="submit"><span>UPDATE STOCK</span></button>
        </div> 
    </form>-->



</div>

<!--<?php
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['brandname'] . " | " . $row['model'] . " | " . $row['type'] .
        " | " . $row['color'] . " | " . $row['price'] ."<br>";
    }
}
?>-->






</body>

</html>