<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administratora</title>
</head>
<body>
    <main>
        <h1>Panel Administratora</h1>
        <?php 
            // Połączenie z bazą danych
            $conn = new mysqli("localhost", "root", null, "quiz");

            // Sprawdź czy połączenie się udało
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Zapytanie sql
            $sql = "SELECT u.id, u.imie, r.user_id, r.userScore FROM user u JOIN results r ON u.id=r.user_id ORDER BY r.userScore DESC";


            // wykonaj zapytanie
            $res = $conn->query($sql);

            // czy wynik został zwrócony
            if ($res->num_rows > 0) {
                echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User ID</th>
                            <th>Score</th>
                        </tr>";

                // Pętla w tablicy wyświetlająca elementy
                while($row = $res->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['imie'] . "</td>
                            <td>" . $row['user_id'] . "</td>
                            <td>" . $row['userScore'] . "</td>
                          </tr>";
                }

                echo "</table>";
            } else {
                echo "No results found";
            }

            // Zamknij połączenie z bazą danych
            $conn->close();
        ?>
    </main>
</body>
</html>
