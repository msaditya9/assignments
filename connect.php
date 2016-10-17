  <?php
   $myServer = "localhost";
        $myUser = "root";
        $myPass = "root";
        $myDB = "camera";
        // Create connection
        $conn = new mysqli($myServer, $myUser, $myPass, $myDB);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
  ?>