<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jeux_php";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("SELECT * FROM joueur WHERE prenom='ghommidh'");
  $stmt->execute();

  // set the resulting array to associative
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($data as $row) { 
    // iterate over values in each row
    foreach($row as $v) { 
        echo $v. " ";
    }
    echo "<br>";
}


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>