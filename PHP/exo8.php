<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 8</title>
<h1><u>Exercice 8</u></h1>
</head>
<body>
<?php
session_start();

if (isset($_POST['nom']) and !empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Exo8.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>

        <p><input type="submit" value="OK"></p>
    
</form>
ton nom est: <?php echo $_SESSION['nom']; ?>

<a href="exo8.php ">Déconnexion </a>
<?php
session_start();
session_destroy();
?>
</br>
<a href="../index.php">retour</a>
</body>
</html>

<xmp>

<php
session_start();

if (isset($_POST['nom']) and !empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Exo8.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>

        <p><input type="submit" value="OK"></p>
    
</form>
ton nom est: <php echo $_SESSION['nom']; ?>

<a href="exo8.php ">Déconnexion </a>
<php
session_start();
session_destroy();
?>

</xmp>