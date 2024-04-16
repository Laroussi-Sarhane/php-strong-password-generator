<?php 
session_start();
if(isset( $_SESSION ['password_utente'] )){
  $password = $_SESSION ['password_utente'] ;
}else{
  header('Location: ./index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    la password è questa
    <?php echo $password ?>
  </div>
</body>
</html>