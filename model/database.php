<?php
$dsn = 'mysql:host=localhost;dbname=cooking';
$username = 'phpuser';
$password = 'pa55word';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $php_errormsg = $e->getMessage();
    echo 'Error Message: ' . $php_errormsg;
    exit();
}
?>