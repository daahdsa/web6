<?php

$id = (int)$_GET['id'];

$stmt = $pdo->prepare("
DELETE FROM application_languages
WHERE application_id = ?
");

$stmt->execute([$id]);

$stmt = $pdo->prepare("
DELETE FROM applications
WHERE id = ?
");

$stmt->execute([$id]);

header("Location: admin.php");

?>