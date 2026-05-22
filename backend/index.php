<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, OPTIONS, GET, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");


$conn = new mysqli("localhost", "publicUser", "", "5eManagerDB");
if ($conn->connect_error){
    echo json_encode(["error"=> "failed to connect"]);
    exit();
}

$url = isset($_GET['url']) ? $_GET['url'] : 'not set';
$method = $_SERVER['REQUEST_METHOD'];

switch ($url) {
    case 'getUsers':
        $result = $conn->query("SELECT * FROM users");
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo json_encode($users);
        break;
    default:
        echo json_encode(["message" => "Invalid request method"]);
        break;
}

$conn->close();
?>