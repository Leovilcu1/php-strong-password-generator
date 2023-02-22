<?php

include __DIR__ . "/functions.php";


$password ="";
$error = null;
if(isset ($_GET["length"]) && (is_numeric($_GET["length"])))

{
    $passwordLenght = intval($_GET["length"]);  
    if($passwordLenght < 5){
        $error = "numero inserito e minore di 5";
    }
    elseif($passwordLenght > 20){
        $error ="lunghezza massima e di 20 caratteri";
    }
    else{
        $password = generateStrongPassword($passwordLenght);
    }
}
else{
    echo"<h2> parametro non passato o non valido  <h1/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php password generator</title>
</head>
<body>
    <div>
        <form action="" method="GET">
            <label for="input-lenght">scegli lunghezza</label>
            <input type="number" name="length" id="input-lenght" min="5" max="20">
            <button type="submit">click</button>
        </form>
    </div>
    <div>
        <?php
            echo "<h1> La tua password e : </h1>";
            echo "<h2>";
            echo $password;
            echo "</ph2>";
        ?>
    </div>
    <div>
        <?php
        if($error != "null"){
            echo "<p>"; 
            echo $error;
            echo "</p>";
        }   
        ?>
    </div>
    
</body>
</html>

<!--  
    1. Creare un form che invii in GET la lunghezza della password
    2. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
-->