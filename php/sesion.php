<?php
  session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  require 'conecta.php';
  if (isset($_SESSION['user_id'])) {
    $id=$_SESSION['user_id'];
    $record=mysqli_query($conexion,"select * from users where Id='".$id."'");
    $results =  mysqli_fetch_array($record);
    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
  else{
  header('Location: login.php');
}
?>