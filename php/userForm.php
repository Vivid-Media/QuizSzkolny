<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quiz</title>
</head>
<body>
    <form action="userForm.php" method="post">
        <h1>Witaj w quizie!</h1>
        <label for="name">Imię: </label>
        <input type="text" name="name" id="name" required><br>
        <label for="surname">Litera nazwiska: </label>
        <input type="text" name="surname" id="surname" required><br>
        <label for="szkola">Nazwa Szkoły: </label>
        <input type="text" name="school" id="school">
        <input type="submit" value="Rozpocznij quiz">
        <script>
            nameInput = document.getElementById("name");
            surnameInput = document.getElementById("surname");
            scoolInput = document.getElementById("school");
            function validateForm() {
                if (nameInput.value.length < 3) {
                    alert("Imię musi składać się z przynajmniej 3 znaków!");
                    return false;
                }
                if (surnameInput.value.length < 1) {
                    alert("Podaj literę swojego nazwiska!");
                    return false;
                }
                return true;
            }

            if(validateForm()) {
                <?php
                    header("Location: quiz.php");
                ?>
            }
        </script>
    </form>
</body>
</html>