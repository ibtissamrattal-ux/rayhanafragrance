<?php
require 'config.php';

$user_id = 1;

$stmt = $pdo->prepare("SELECT SUM(quantity) as total FROM cart WHERE user_id = ?");
$stmt->execute([$user_id]);

$result = $stmt->fetch();

$count = $result['total'] ?? 0;

echo json_encode(['count'=>$count]);
?>
