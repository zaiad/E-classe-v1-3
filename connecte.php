<?php
    $conn = new mysqli('localhost' , 'root', '' ,'e_classe_db');

if ($conn->connect_error) {
  die('Connection failed: '. $conn  ->connect_error);
}
?>