<?php
include 'database.php';

$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("UPDATE member SET is_approved = 1 WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

echo "Member with ID $id has been approved (feature placeholder).";
// header("Location: member.php");
exit;


?>
