<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $birthday = $_POST['birthday'];

    setcookie('user_birthday', $birthday, strtotime('tomorrow'));
    

    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}

if(isset($_COOKIE['user_birthday']) && $_COOKIE['user_birthday'] == date('Y-m-d')) {
    echo "sto lat!";
} else {

    echo '
    <form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
        Podaj datę urodzin: <input type="date" name="birthday" required>
        <input type="submit" value="Zapisz">
    </form>';
}
?>
