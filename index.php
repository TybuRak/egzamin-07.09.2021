<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
<div class="start-view-wrapper">
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div class="left-menu">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php

            $servername="localhost";
            $user = "root";
            $paswd = "";
            $db = "egzamin_ee09_7.09.2021";

            $conn = new mysqli($servername, $user, $paswd, $db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia`=1";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["nazwa"] . ", występowanie: " . $row["wystepowanie"] . "</li>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="right-menu">
        <img src="ryba.jpg" alt="Sum">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer>
        <p>Stronę wykonał: Paweł Tyburski</p>
    </footer>
</div>
</body>
</html>