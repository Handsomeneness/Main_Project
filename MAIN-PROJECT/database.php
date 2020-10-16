<?php
$mysqli = @new mysqli('localhost', 'root', 'root', 'userbase');
if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
}
$mysqli->query('insert into users ("Login","Password","Admin") values("1", "1", "1")');
$mysqli->close();
