<!DOCTYPE html>

<head>
    <title> Formulaire </title>
</head>

<body>
    <h2>Test Formulaire</h2>

    <?php

   
    if (isset($_POST['leChiffre']) && !empty($_POST['leChiffre'])) {
        echo "Ma valeur est :" . $_POST['leChiffre'];
    } else {
        echo "Formulaire non saisie";

        ?>
        <form method="post" action="form.php">

            <fieldset>
                <legend>Votre Chiffre</legend>

                <p><label>Chiffre :</label><input type="text" name="leChiffre" /></p>

                <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
            <?php

            }

            ?>
            </br>
            <a href="../index.php">retour</a>
</body>

</html>

<xmp>


<php

   
if (isset($_POST['leChiffre']) && !empty($_POST['leChiffre'])) {
    echo "Ma valeur est :" . $_POST['leChiffre'];
} else {
    echo "Formulaire non saisie";

    ?>
    <form method="post" action="form.php">

        <fieldset>
            <legend>Votre Chiffre</legend>

            <p><label>Chiffre :</label><input type="text" name="leChiffre" /></p>

            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
        <php

        }

        ?>
        <a href="../index.php">retour</a>

    </xmp>