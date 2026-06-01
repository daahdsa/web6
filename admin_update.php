<?php
$stmt = $pdo->prepare("
UPDATE applications
SET
full_name = ?,
phone = ?,
email = ?,
birth_date = ?,
gender = ?,
bio = ?
WHERE id = ?
");

$stmt->execute([
    $_POST['full_name'],
    $_POST['phone'],
    $_POST['email'],
    $_POST['birth_date'],
    $_POST['gender'],
    $_POST['bio'],
    $_POST['id']
]);

?>