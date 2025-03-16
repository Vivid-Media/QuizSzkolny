<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quiz</title>
</head>
<body>

<!--
    <main>
        <form action="userForm.php" class="userForm" method="post">   
            <h1>Witaj w quizie!</h1>
            <label for="name">Imię: </label>
            <input type="text" name="name" id="name"><br>
            <label for="surname">Litera nazwiska: </label>
            <input type="text" name="surname" id="surname"><br>
            <label for="szkola">Nazwa Szkoły: </label>
            <input type="text" name="school" id="school"> <br>
            <input type="submit" name="submit" value="Rozpocznij quiz">
        </form>
            php
                ini_set('display_errors', 0); // Prevents potential errors from displaying

                if(isSet($_POST['submit'])) {
                    // Loads data from userForm
                    $nameInput = str_replace(" ", "", $_POST['name']);
                    $surnameInput = str_replace(" ", "",  $_POST['surname'] );         
                    $schoolInput = str_replace(" ", "",  $_POST['school'] );

                    // Simple else-if checking if input data is in correct format. 
                    if (!preg_match("/[A-ZĄĘŁŃÓŚŹŻ]{1}[a-ząćęłńóśźż]{2,}/", $nameInput)) {
                        echo"<script>alert('Imię musi składać się z przynajmniej 3 znaków oraz aczynać od wielkiej litery!')</script>";
                    } else if (!preg_match("/[A-ZĄĘŁŃÓŚŹŻ]{1}/", $surnameInput)) {
                        echo"<script>alert('Podaj pierwszą (wielką) literę swojego nazwiska!')</script>";
                    } else if (strlen($schoolInput) < 3) {
                        echo"<script>alert('Podaj poprawnie nazwę swojej szkoły!')</script>";
                    } else {

                        /**
                         * TODO: MySQL database requests
                        */
                        
                        // Heading to quiz.php file and closing form
                        header("Location: ./quiz.php");
                        exit;
                    }
                } 
            ?>
    </main>
    <footer>
    <p class="footerLeft">
      Copyright© 2024
      <a href="https://cksulechow.pl/" target="_blank">CKZiU Sulechow</a>
    </p>
    <span class="footerRight">Szymon Urbański 3TA</span>
  </footer>-->

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

