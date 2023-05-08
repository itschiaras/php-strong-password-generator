<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<?php 
include __DIR__.'/partials/functions/functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-primary-subtle">
    <h1 class="text-center mt-5">Generatore di password <span class="text-uppercase">sicurissime (?)</span></h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" class="d-flex flex-column align-items-center">
        <label for="passLength" class="mb-3">Inserire la lunghezza desiderata per la password</label>
        <input type="number" min="8" placeholder="min 8 caratteri" name="passLength" id="passLength" class="mb-3">
        <button type="submit" class="btn btn-primary">Crea</button>
        <?php if (!empty($_GET['passLength']) && $_GET['passLength'] > 8) { ?>
            <h2>La tua nuova sicurissima password è:</h2>
            <h4><?php echo getRndPass($length) ?></h4>
        <?php } ?>
        
    </form>
   
</body>
</html>