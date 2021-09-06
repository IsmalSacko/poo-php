<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion </title>
</head>
    <h1>Veuillez vous connecter ici pour voir nos articles et commentaires</h1>
<body>
    <form  method="post">
        <label for="email"></label>
        <input type="email" name="email" id="email">
        <label for="pw"></label>
        <input type="password" name="password" id="pw">
        
        <input type="submit" value="Connectez-vous">
    </form>
    <?php
    require_once 'lib/database.php';
      $pdo = getPdo();
      $query = $pdo->prepare("SELECT * FROM users WHERE email = ?");
      $query->execute([$_POST['email']]);
      $user = $query->fetch();
      
      if ($user && password_verify($_POST['password'], $user['passwd'])) { 
        header("Location: index.html.php");
             
      }      
      else{
          $msg = "<h1 style='color: red;'>Mot de passe ou adresse email incorrect !</h1>";
          echo $msg;
          
      }
    
    ?>
</body>

</html>