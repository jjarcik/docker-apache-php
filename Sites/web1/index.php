<?php
    $servername = "host.docker.internal";
    $username = "root";
    $password = "admin";
    $dbname = "testdb";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, '3306');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, name FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>