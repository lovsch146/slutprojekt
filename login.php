<!DOCTYPE html>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lovisa");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
session_start();


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Logga in som administratör.</title>
    </head>
    <body>
        <?php
        
        ?>
    </body>
</html>
        
        