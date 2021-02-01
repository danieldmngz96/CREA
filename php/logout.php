<?php
    session_start();
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

  $retval = mysqli_query($conexion,$sql );
  session_start();

  session_unset();

  session_destroy();

  header('Location: ./../index.html');
  
?>
