<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Validation</title>
</head>
<body class="col-md-4 offset-md-4">
    <h1 class="text-center mb 4"> Validation des entrées </h1>
        <?php
        if(isset ($_POST['nombre']) AND isset($_POST['nom']) AND isset($_POST['mois']) AND isset($_POST['annee']) AND isset($_POST['cvv']))
        {
            
        
    ?>
    <table class="table table-sm" >
            <tr class="table-primary">
                <td> <p> Votre numéro de carte est: </td>
                <td> <?php  echo $_POST['nombre']; ?> </p> </td>
            </tr>

            <tr class="table-primary">
                <td> <p> Votre nom est: </td>
                <td> <?php  echo $_POST['nom']; ?> </p> </td>
            </tr>

            <tr class="table-primary">
                <td> <p> Le mois sélectionné est: </td>
                <td> <?php  echo $_POST['mois']; ?> </p> </td>
            </tr>

            <tr class="table-primary">
                <td> <p> L'année sélectionnée est: </td>
                <td> <?php  echo $_POST['annee']; ?> </p> </td>
            </tr>

            <tr class="table-primary">
                <td> <p> Le CVV sélectionné est: </td>
                <td> <?php  echo $_POST['cvv']; ?> </p> </td>
            </tr>
   
    
        </table>    
     <?php 
        }
        else
        {
            echo "Remplissez tous les champs";
        }
    ?>

</body>
</html>
