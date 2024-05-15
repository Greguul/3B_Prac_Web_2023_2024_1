<!DOCTYPE html>
<html>
<head>
    <title>Wyświetlanie wpisów</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Wpisy</h1>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Treść</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $conn = new mysqli('localhost', 'root', '', 'users');

            if ($conn->connect_error) {
                die("Błąd połączenia z bazą: " . $conn->connect_error());
            }
            echo "Udało się połączyć z bazą";

            $sql = "SELECT autor, entry_date, tytul, content FROM wpisy";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["entry_date"] . "</td>";
                    echo "<td>" . $row["autor"] . "</td>";
                    echo "<td>" . $row["tytul"] . "</td>";
                    echo "<td>" . $row["content"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Brak wpisów.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
