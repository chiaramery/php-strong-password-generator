<!-- Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->


<?php
function rand_down_letter()
{
    $int = rand(0, 25);
    $a_z = "abcdefghijklmnopqrstuvwxyz";
    $rand_letter = $a_z[$int];
    return $rand_letter;
}
function rand_up_letter()
{
    $int = rand(0, 25);
    $a_z = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $rand_letter = $a_z[$int];
    return $rand_letter;
}
function rnd_number()
{
    $rnd_num = rand(1, 10);
    return $rnd_num;
}
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

$user_lenght = $_GET["lenght-email"];
if (!empty($user_lenght)) {
    $email_num = email_lenght($user_lenght);
}
function email_lenght($lenght)
{
    echo "Ciao";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Generetor</title>
</head>

<body>

    <main>
        <form action="index.php" method="GET">
            <label for="lenght-email">Lunghezza password:</label>
            <input type="number" id="lenght-email" name="lenght-email">
            <button type="submit">Invia</button>
            <button type="reset">Annulla</button>
        </form>
    </main>
</body>

</html>