
<html>
    <head>
        <title>
            Register user
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body >
    <?php
          
    ?>
     <div class="container">
     <div class="header">
    <ul style=" font-size: 30px;" class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="indexr.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="users.php">Log In</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a style="font-size: x-large; font-weight: Bold;" class="nav-link disabled" href="indexr.php">QUIZZEO</a>
  </li>
  </ul>
  
</div>
         <div style="  justify-content: center; align-items: center; display:flex; margin-top: 50px; font-size:50px;" class="Regform">Registration</div>
     <div  style="  justify-content: center; align-items: center; display:flex; margin-top: 40px; font-size: 30px;"  class="form">
       <form  action="usr.php" method="POST" >

        <label>Pseudo:</label><br>
        <input type="varchar" name="nom" id="nom"  required><br>
        <label>Email:</label><br>
        <input type="varchar" name="mail" id="mail"  required><br>
        <label>Password:</label><br>
        <input type="varchar" name="mdp" id="mdp" required><br>
        
        
        <br>
        <input id="snd" type="submit" value="Send">
        </form>
        
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>


</html>


