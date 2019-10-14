<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 5</title>
<h1><u>Exercice 5</u></h1>
</head>

<body>
<?php

if (isset ($_GET['nbr']) && !empty ($_GET['nbr'])) {
echo "la valeur est : " .$_GET['nbr'];
}else{
echo "Formulaire non saisie";
?>



<form method="GET" action="Formulaire.php"> 

<label> Entrez  </label>


<input type="text" name="nbr">
<input type="submit" name="CLIC" value="CLICC">

<?php
}
?>
</br>
<a href="../index.php">retour</a>
</body>
</html>


<xmp>
<html>
<head>

</head>

<body>
<php

if (isset ($_GET['nbr']) && !empty ($_GET['nbr'])) {
echo "la valeur est : " .$_GET['nbr'];
}else{
echo "Formulaire non saisie";
?>



<form method="GET" action="Formulaire.php"> 

<label> Entrez  </label>


<input type="text" name="nbr">
<input type="submit" name="CLIC" value="CLICC">

<php
}
?>
<a href="../index.php">retour</a>
</body>
</html>
</xmp>