<!-- Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
// Funzione random lettere minuscole
function rand_down_letter()
{
    $int = rand(0, 25);
    $a_z = "abcdefghijklmnopqrstuvwxyz";
    $rand_letter = $a_z[$int];
    return $rand_letter;
}
// Funzione random lettere maiuscole
function rand_up_letter()
{
    $int = rand(0, 25);
    $a_z = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $rand_letter = $a_z[$int];
    return $rand_letter;
}
// Funzione random numeri
function rnd_number()
{
    $rnd_num = rand(1, 10);
    return $rnd_num;
}
// Funzione random caratteri speciali
function rnd_character()
{
    $int = rand(0, 8);
    $character = "!@#$%^&*'";
    return $character[$int];
}
var_dump(rand_down_letter());
var_dump(rand_up_letter());
var_dump(rnd_number());
var_dump(rnd_character());

// GET prende il valore che l'user mette nell'input
$user_lenght = $_GET["lenght-email"] ?? "";
var_dump($user_lenght);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Email Generetor</title>
</head>

<body>

    <main>

        <div class="container">
            <!-- Upper text -->
            <div class="upper-text">
                <h1>Strong Password Generetor</h1>
                <h3>GENERA UNA PASSWORD SICURA</h3>
            </div>
            <!-- Form -->
            <form action="index.php" method="GET">
                <label for="lenght-email">Lunghezza password:</label>
                <input type="number" id="lenght-email" name="lenght-email">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </form>

        </div>
    </main>
</body>

</html>