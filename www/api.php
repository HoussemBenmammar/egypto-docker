<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "mysql"; // Correction : Docker utilise le nom du service comme hostname
$username = "root";
$password = "root";
$database = "egypto";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connexion échouée: " . $conn->connect_error]));
}

if (isset($_GET['table']) && ($_GET['table'] === 'decouvrir' || $_GET['table'] === 'dieu')) {
    $table = $_GET['table'];
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(["error" => "Table non valide. Utilisez 'decouvrir' ou 'dieu'."]);
}

$conn->close();
