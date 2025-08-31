<?php
session_start();
header('Content-Type: application/json');

// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Get JSON POST
$data = json_decode(file_get_contents('php://input'), true);

if(isset($data['name'], $data['price'])){
    $id = uniqid();
    $_SESSION['cart'][$id] = [
        'name' => $data['name'],
        'price' => (float)$data['price']
    ];
    echo json_encode(['success'=>true]);
    exit;
}

echo json_encode(['success'=>false]);
