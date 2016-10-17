<!DOCTYPE html>
<html>


<head>
 		<?php
            include 'links.php';
      	?>
</head>
    

<body background="images/image.jpg">
<div class="container">


			
			<?php
			include 'connect.php';


			$name = $_POST['brand'];



			$sql = "INSERT INTO brand (brandname)
			VALUES ('$name')";

			if ($conn->query($sql) === TRUE) {
			    echo "<h2>Brand added</h2>";
			} 

			else {
			    echo "<h2>Brand Already Exists, View / Add Stocks</h2>";
			}

			$conn->close();

			?>
			<br>
				<?php echo "<h3>Brand name : " . $name . "</h3>" ?>
			<br>
			


			<a href="adminadd.php"><button class="button next-button"><span>ADD STOCK</span></button></a>
			
			    

			     <!--<form action="admindelete.php" method="post" >
			        
			       <div>
			            <button class="button next-button" type="submit"><span>DELETE STOCK</span></button>
			        </div>
			    </form>
			<br>
			    
			    <form action="adminupdate.php" method="post" >
			        <div>
			            <button class="button next-button" type="submit"><span>UPDATE STOCK</span></button>
			        </div> 
			    </form>-->

</div>
</body>

</html>