<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "jeux_php";
try { 
   
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO joueur(nom, prenom, email, password , niveau) VALUES ( '".$nom."', '".$prenom."', '".$email."', '".$password."','1')";
//   $sql="INSERT INTO joueur(nom, prenom, email, password , niveau) VALUES ( 'ls', 'ls', 'l@gmail.com', 'l','1')";
    
  $conn->exec($sql);
  echo "New record created successfully";
  echo $sql; 
  

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>