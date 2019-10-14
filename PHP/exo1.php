<html>
    <head>
    <link href="style.css" rel="stylesheet">
        <title>Exercice 1</title>
        <h1><u>Exercice 1</u></h1>
    </head>
    <body>
        <?php $NombreAleatoire = rand ( 0 , 100 ); ?>
    <div class="chiffre pair">
       <?php 
       if($NombreAleatoire%2 == 0) 
       {
           ?>
           <p class="paire"><?php
           echo "$NombreAleatoire est pair";
           ?></p><?php
       }
       else {
    ?>
        <p class="impaire"><?php echo "$NombreAleatoire est impair";}
        ?></p>
    <a href="../index.php">retour</a>
</body>
</html>

<xmp>
<php $NombreAleatoire = rand ( 0 , 100 ); ?>
    <div class="chiffre pair">
       <php 
       if($NombreAleatoire%2 == 0) 
       {
           ?>
           <p class="paire"><php
           echo "$NombreAleatoire est pair";
           ?></p><php
       }
       else {
    ?>
        <p class="impaire"><php echo "$NombreAleatoire est impair";}
        ?></p>
        <a href="../index.php">retour</a>
    </xmp>