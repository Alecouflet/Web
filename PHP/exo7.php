<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 7</title>
<h1><u>Exercice 7</u></h1>


<body>
<?php session_start(); 
  
  define('LOGIN','Ohazzar');  
  $message = '';    
  if(!empty($_POST))
  {  
    echo "empty post";
    if(empty($_POST['login']))
    {

      echo "empty post login";
      $message = 'Indiquer votre login';
    }
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Login faux ';
    }  
      else
    {    
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
 <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>

    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Identifiant</legend>
          <p>
            <label for="login">Login :</label> 
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>
          <p>
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
    <a href="../index.php">retour</a>
  </body>
</html>

<xmp>
<php session_start(); 
  
  define('LOGIN','Ohazzar');  
  $message = '';    
  if(!empty($_POST))
  {  
    echo "empty post";
    if(empty($_POST['login']))
    {

      echo "empty post login";
      $message = 'Indiquer votre login';
    }
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Login faux ';
    }  
      else
    {    
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
 <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>

    <php if(!empty($message)) : ?>
      <p><php echo $message; ?></p>
    <php endif; ?>
    <form action="<php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Identifiant</legend>
          <p>
            <label for="login">Login :</label> 
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>
          <p>
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
    <a href="../index.php">retour</a>
    </xmp>