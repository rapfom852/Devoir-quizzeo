<?php
 require('connect.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Profile User- Quizzeo</title>
    
</head>
<body>
<div class="container">
<div class="header">
    <ul style=" font-size: 30px;" class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="">Modify</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="disconnect.php">Disconnect</a>
  </li>
  <li class="nav-item">
    <a style="font-size: x-large; font-weight: Bold;" class="nav-link disabled" href="#">QUIZZEO</a>
  </li>
  </ul>
  
</div>
<div style=" margin-top: 100px;" class="p">
    <h1>Your informations</h1>
</div>
<div style=" justify-content: center; align-items: center; display: flex;" class="row">
   
<?php
                if($_SESSION["pseudo"]) {
                    $sql = "SELECT * FROM user where id = ".$_SESSION["id"]."";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                        ?>
            <div class="row">
                <div class="col col-lg-6">
                <html><?php
                        while($row = $result->fetch_assoc()) { ?>
                            <h1>Pseudo</h1><p><?php echo $row["pseudo"]; ?></p>                       
                            <h1> Email Address</h1><p><?php echo $row["email"]; ?></p>
                            <h1>Password</h1><p><?php echo $row["pass_word"]; ?></p>
                             <br><p>Vous êtes un utilisateur.</p>
                            <?php } 
                            
                            
                     } else {
                         echo "0 results";
                     }}?>
    
</div>
</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>