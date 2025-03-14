<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quiz</title>
</head>
<body>
    <form method="post">
        <h1>Witaj w quizie!</h1>
        <label for="name">Imię: </label>
        <input type="text" name="name" id="name" ><br>
        <label for="surname">Litera nazwiska: </label>
        <input type="text" name="surname" id="surname" ><br>
        <label for="szkola">Nazwa Szkoły: </label>
        <input type="text" name="school" id="school">
        <input type="submit" name="ok" id="ok" value="Rozpocznij quiz">
    </form>

    <?php 
    if(isset($_POST['ok'])){
        $imie = $_POST["name"];
        $nazwisko = $_POST["surname"];

        if (strlen($imie)>3) {
            echo "blad";
            header("Location: ./quiz.php");
        }
        else{
            echo "blad";
        }
    }





?>
</body>
</html>