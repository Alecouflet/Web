
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2.2</title>
    <h1><u>Exercice 2.2</u></h1>
</head>
<body>
<table border="1">
<tr>
<?php $tab[0] = array("NOM"=> "LECOUFLET","Prenom"=>"Alexis","Password"=>"123");

 for ($i=0;$i<1;$i++){
     foreach ($tab[$i] as $Key=>$Value)
    {
    ?>
        <tr><td><?php echo $Key;?></td>
        <td><?php echo $Value;?></td></tr>
        <?php
    }
}
?>
<tr>
</table>
<a href="../index.php">retour</a>
</body>
</html>

<xmp>
<table border="1">
<tr>
<php $tab[0] = array("NOM"=> "LECOUFLET","Prenom"=>"Alexis","Password"=>"123");

 for ($i=0;$i<1;$i++){
     foreach ($tab[$i] as $Key=>$Value)
    {
    ?>
        <tr><td><php echo $Key;?></td>
        <td><php echo $Value;?></td></tr>
        <php
    }
}
?>
<tr>
</table>
<a href="../index.php">retour</a>
</xmp>

