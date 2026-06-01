<?php
$id = (int)$_GET['id'];

$stmt = $pdo->prepare("
SELECT *
FROM applications
WHERE id = ?
");

$stmt->execute([$id]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>