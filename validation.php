<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Validation</title>
</head>
<body>
    <h1> Validation des entrées </h1>
    <p class="col-md-4 offset-md-3">
        <img src="Images/card.jpg" alt="">
    </p>
    <?php
        if(isset ($_POST['nombre']) AND isset($_POST['nom']) AND isset($_POST['mois']) AND isset($_POST['annee']) AND isset($_POST['cvv']))
        {
            
        
    ?>
        <p> Votre numéro de carte est: <?php  echo $_POST['nombre']; ?> </p>
        <p> Votre nom est: <?php  echo $_POST['nom']; ?> </p>
        <p> Le mois sélectionné est: <?php  echo $_POST['mois']; ?> </p>
        <p> L'année sélectionnée est: <?php  echo $_POST['annee']; ?> </p>
        <p> Le CVV sélectionné est: <?php  echo $_POST['cvv']; ?> </p>
        
     <?php 
        }
        else
        {
            echo "Remplissez tous les champs";
        }
    ?>

</body>
</html>