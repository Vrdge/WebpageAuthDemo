<?php
$login = filter_var(
    trim($_POST['login']),
    FILTER_SANITIZE_STRING
);
$name = filter_var(
    trim($_POST['name']),
    FILTER_SANITIZE_STRING
);
$pass = filter_var(
    trim($_POST['pass']),
    FILTER_SANITIZE_STRING
);
if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "login lenght is not correct";
    exit();
}
if (mb_strlen($name) < 4 || mb_strlen($name) > 51) {
    echo "name can not be 1 digit of length ";
    exit();
}
if (mb_strlen($pass) < 9 || mb_strlen($pass) > 33) {
    echo "-password must contain min 8 digits";
    exit();
}

$pass = md5($pass."passwordawrkudzfhbhjmnrhfcjh");


$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `users`(`login`,`pass`,`name`)
    VALUES('$login','$pass','$name')");
$mysql->close();


header("Location: /");
?>