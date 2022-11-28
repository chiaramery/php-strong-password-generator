<!-- Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
// GET prende il valore che l'user mette nell'input
$user_lenght = $_GET["lenght-email"] ?? "";
var_dump($user_lenght);

// Funzione random lettere minuscole
function rand_p($user_lenght)
{
    $password_element = ["abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "1234567890", "!@#$%^&*'£"];

    $result = "";
    if ($user_lenght > 0) {
        var_dump("é maggiore di 0");
        for ($i = 0; $i < $user_lenght; $i++) {
            $rnd_comp = rand(0, count($password_element) - 1);
            var_dump($rnd_comp);
            $rnd_element = rand(0, strlen($password_element[$rnd_comp]) - 1);
            var_dump($rnd_element);
            $result .= $password_element[$rnd_comp][$rnd_element];
            var_dump($result);
        }
        return $result;
    } else {
        return $result = "Hai sbagliato ad inserire la lunghezza della password";
    }
}




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


            <!-- Risultato -->

            <p> La password generata è:
                <!-- <?php echo $result; ?> -->
            </p>
        </div>
    </main>
</body>

</html>