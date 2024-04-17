<?php 

require_once __DIR__ . '/functions.php';
// verifica della lunghezza 
if(isset($_POST['lunghezza'])){
  $risposta = generatepassword($_POST['lunghezza']);
  

}







?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<div class="container mt-3  text-center text-white  ">
  <h1>strong password generator</h1>
  <h2>generate your password</h2>

</div>
     
    <?php if(isset($risposta)): ?>
    <div class=" col-7  d-flex  justify-content-center container">
      <div class="messaggio  d-flex  align-content-center ">
        <div>
          <?php echo $risposta ?>
        </div>

      </div>

    </div>
    <?php endif; ?>


<div class=" container ">

<form action="index.php" method="post">

<div class=" d-flex container  justify-content-center  mt-3  h-100 ">
  <div>
    lunghezza password
  </div>
  <div>

    <input type="number" name="lunghezza">
  </div>

  <button type="submit"> invia</button>

</div>


</form>

</div>



  
</body>
</html>