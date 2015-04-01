<!DOCTYPE html>
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lovisa");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
session_start();

if (isset($_POST['logout'])) {
    $_SESSION["login"] = 0;
}


if (isset($_POST["userName"])) {
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "SELECT * FROM `login` WHERE userName='$userName' AND password='$password'";
//    echo $sql;
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":userName", $userName);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $login = $stmt->fetchAll();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Logga in som administratör.</title>
    </head>
    <body>
        <?php
        if (!empty($login)) {
            $_SESSION["login"] = 1;
            $_SESSION["userName"] = $userName;
            echo '<p>Välkommen, du är nu inloggad!</p>';
        } else {
//    echo 'Vänligen logga in med ett registrerat användarnamn';
        }

        if ($_SESSION["login"] == 1) {
    echo "<p>Du är nu inloggad som " . $_SESSION["userName"] . "!</p>";
            echo "<form method='POST'><input type = 'submit' value = 'Logga ut' name='logout'></form>";
//            
            
        } else {
            echo "<form method = 'POST'>
        <p>Användarnamn:</p> <input type = 'text' name = 'userName' required>
        <p>Lösenord:</p><input type = 'password' name = 'password' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
        }
//if ($_SESSION["inlog"] == 0) {
//    
//}
// else {
//}
        ?>
    </body>
</html>
        
        