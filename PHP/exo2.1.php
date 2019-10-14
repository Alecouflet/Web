<html>

<head>
    <link href="" rel="stylesheet">
    <title>Exercice 2.1</title>
    <h1><u>Exercice 2.1</u></h1>
</head>

<body>
    <table border="1">
    <tr>
<?php 
        $MonTableauDeChiffres = array(13,19,2,52,64);

       for($i = 0; $i<5; $i++)
        {
?>
            <th><?php echo "$MonTableauDeChiffres[$i]"?></th>
        <?php } ?>
    </tr>
    </table>
        
    <a href="../index.php">retour</a>

    
</body>

</html>

<xmp>
<table border="1">
    <tr>
<php 
        $MonTableauDeChiffres = array(13,19,2,52,64);

       for($i = 0; $i<5; $i++)
        {
?>
            <th><php echo "$MonTableauDeChiffres[$i]"?></th>
        <php } ?>
    </tr>
    </table>
        
    <a href="../index.php">retour</a>
    </xmp>