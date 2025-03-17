<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/userformstyle.css">
    <title>Quiz</title>
</head>

<body>

<header>
        <h2>Witaj w quizie!</h2>
</header>
<section class = "mainsectionform">
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
                $imieBezSpacji = str_replace([" "], "", $imie);

                $nazwisko = $_POST["nazwisko"];
                //usuwam spacje z nazwiska
                $nazwiskoBezSpacji = str_replace([" "], "", $nazwisko);

                $szkola = $_POST["szkola"];


            // Walidacja danych
            if (strlen($imieBezSpacji) < 3) {
                $blad = "Imię musi mieć co najmniej 3 litery.";
            } elseif (strlen($nazwiskoBezSpacji) != 1) {
                $blad = "Podaj pierwszą litere nazwiska.";
            } else {
                // Połączenie z bazą danych
                $conn = new mysqli("localhost", "root", "", "quiz");

                // Sprawdzenie połączenia
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Przygotowane zapytanie SQL
                $stmt = $conn->prepare("INSERT INTO user (imie, literaNazwiska, szkola) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $imieBezSpacji, $nazwiskoBezSpacji, $szkola);

                // Wykonanie zapytania
                if ($stmt->execute()) {
                    // Retrieve the last inserted user ID
                    $user_id = $conn->insert_id;
                    session_start();
                    $_SESSION['user_id'] = $user_id;
                    header("Location: ./quiz.php");
                } else {
                    $blad = "Błąd podczas dodawania użytkownika: " . $stmt->error;
                }

                // Zamykanie funkcji oraz $conn
                $stmt->close();
                $conn->close();
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
    <footer>
			<p class="footerLeft">
				Copyright© 2024
				<a href="https://cksulechow.pl/" target="_blank">CKZiU Sulechow</a>
			</p>
			<span class="footerRight">&copy; Vivid Media 2025</span>
		</footer>
</body>
</html>

