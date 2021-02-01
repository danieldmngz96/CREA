<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ./../index.php');
  }
  include ("conecta.php");

  if (!empty($_POST['Email']) && !empty($_POST['Password'])) {
    $email=$_POST["Email"];
    $record=mysqli_query($conexion,"select * from users where Email='".$email."'");
    $results = mysqli_fetch_array($record);

    $message = '';

    if ($_POST['Email'] == $results['Email']&& $_POST['Password'] == $results['Password']) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ./../primerascreen.php");
    } else {
      
      
      header("Location: logout.php");
      
    }
  }

?>

