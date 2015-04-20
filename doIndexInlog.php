<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("DB_SERVER", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_NAME", "lovisa");
        $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
//if (isset($_GET["add"])) {
        $nyText = filter_input(INPUT_GET, 'nyText', FILTER_SANITIZE_SPECIAL_CHARS); 
        $sql = "UPDATE `nyText` SET `starttid`='$startred' WHERE id='$id'";


        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":nyText", $nyText);
        $stmt->execute();
        $login = $stmt->fetch();
        
        if (isset($_POST["redigera"])) {
    $startred = filter_input(INPUT_POST, 'startred', FILTER_SANITIZE_SPECIAL_CHARS);
    $slutred = filter_input(INPUT_POST, 'slutred', FILTER_SANITIZE_SPECIAL_CHARS);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "UPDATE `tider` SET `starttid`='$startred',`sluttid`='$slutred' WHERE id='$id'";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":startred", $startred);
    $stmt->bindParam(":slutred", $slutred);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $login = $stmt->fetch();
}
        ?>
    </body>
</html>
