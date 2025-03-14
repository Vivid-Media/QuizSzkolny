<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quiz</title>
</head>
<body>
<header>
        <h2>Witaj w quizie!</h2>
</header>
<section class = "mainsection">
<section class="logowanie">
    <form method="post" >
     
        <?php
        // inicjalizacja zmiennych
        $imie="";
        $nazwisko="";
        $szkola="";
        $blad="";

        // sprawdzam czy formularz został wysłany
        if (isset($_POST['ok'])) {

                $imie = $_POST["imie"];
                //usuwam spacje z imienia
                $imieBezSpacji = str_replace(" ", "", $imie);

                $nazwisko = $_POST["nazwisko"];
                //usuwam spacje z nazwiska
                $nazwiskoBezSpacji = str_replace(" ", "", $nazwisko);

                $szkola = $_POST["szkola"];


            // Walidacja danych
            if (strlen($imieBezSpacji) < 3) {
                $blad = "Imię musi mieć co najmniej 3 litery.";
            } elseif (strlen($nazwiskoBezSpacji) != 1) {
                $blad = "Podaj pierwszą litere nazwiska.";
            } else {
                header("Location: ./quiz.php");
            }
        }
        ?>

            

            
        <label for="imie">Imię: </label>
        <input type="text" name="imie" id="imie" value="<?php echo $imie; ?>" required><br>

        <label for="nazwisko">Pierwsza litera nazwiska: </label>
        <input type="text" name="nazwisko" id="nazwisko" value="<?php echo $nazwisko; ?>" maxlength="1" required><br>

        <label for="szkola">Nazwa Szkoły: </label>
        <input type="text" name="szkola" id="szkola" value="<?php echo $szkola; ?>" required><br>

        <input type="submit" name="ok" id="ok" value="Rozpocznij quiz">
        <p id="blad"><?php echo $blad; ?></p>
    </form>
    </section>
    </section>
</body>
</html>
