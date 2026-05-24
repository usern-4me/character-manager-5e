<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: POST, OPTIONS, GET, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
    http_response_code(200);
    exit;
}

require_once __DIR__ . '/controllers/UserController.php';





$requestMethod = $_SERVER['REQUEST_METHOD'];

$request = $_GET['url'] ?? null; 

$input = json_decode(file_get_contents('php://input'), true)??[];

switch ($request) {
    case 'createUser':
        if ($requestMethod !== 'POST') {
            http_response_code(405);
            echo json_encode(['error' => 'Method Not Allowed. Must be POST.']);
            exit;
        }
        $username = $input['username'] ?? "";
        $password = $input['password'] ?? "";
        $controller = new UserController();
        $controller->createUser($username, $password);
        break;

    default:
        http_response_code(404);
        echo json_encode([
            'error' => 'Endpoint not found',
            'debug_received_url' => $request
        ]);
        break;
}
?>