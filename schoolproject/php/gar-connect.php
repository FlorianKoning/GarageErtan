<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projectertan";

try {
    $conn = new PDO('mysql:host=$dbServername;dbname=$dbName' . $dbUsername . $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br>";
}
catch(PDOException $e) {
    echo "Connectie mislukt:" . $e->getMessage();
}

?>