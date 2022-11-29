<!-- Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file *index.php* -->

<?php
// Creo stringhe
$alphabet = 'abcdefghijklmnopqrstuvwxyz';
$num = '1234567890';
$characters = '!?&%$£<>+-()[]@#_="';

// Concatenazione stringhe
$all_string = $alphabet . strtoupper($alphabet) . $num . $characters;
// var_dump($all_string);

if (isset($_GET["lenght"])) {
    // GET prende il valore che l'user mette nell'input
    $user_input = $_GET["lenght"];
    $result = "";

    // Se l'input dell'utente è compreso tra 8 e 30
    if ($user_input >= 8 && $user_input <= 30) {
        $password = "";

        // Mentre la lughezza della stringa è minore del numero inserito dall'utente
        while (strlen($password) < $user_input) {
            // Creo un indice random tra 0 e la lunghezza della stringa - 1
            $ind = rand(0, (strlen($all_string) - 1));
            // Uso l'indice random per prendere caratteri random dalla stringa completa
            $sym = $all_string[$ind];
            // Concateno password con la stringa generata con l'indice randomico
            $password .= $sym;
        }
        // $result prende il valore di $password
        $result = $password;
    } else {
        // Sennò da errore
        $result = "La password deve essere tra 8 e 30 caratteri, cambia preferenza di lunghezza";
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
    <title>Password Generetor</title>
</head>

<body class="bg-info">
    <main>
        <div class="container">
            <!-- Upper text -->
            <div class="up-text col-12">
                <h1>Strong Password Generetor</h1>
                <h4>GENERA UNA PASSWORD SICURA</h4>
            </div>

            <!-- Alert -->
            <?php if (isset($result)) {
            ?>
                <div class="col-5">
                    <div class="alert alert-info" role="alert">
                        <!-- Stampo $result nell'alert -->
                        <?php echo $result; ?>
                    </div>
                </div>
            <?php } ?>
            <!-- /Alert -->

            <!-- Form -->
            <div class="col-5">
                <form action="index.php">
                    <label for="lenght">Lunghezza password:</label>
                    <input type="number" name="lenght" id="lenght" class="form-control">
                    <button class="btn btn-primary">Invia</button>
                    <button class="btn btn-secondary">Annulla</button>
                </form>
            </div>
            <!-- /Form -->
        </div>
    </main>

</body>

</html>