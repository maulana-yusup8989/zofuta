<?php
include 'conn.php';
session_start();

	if(!isset($_SESSION['su_admin']) || trim($_SESSION['su_admin']) == ''){
		header('location: ../../front-end/index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM user WHERE id_user=:id");
	$stmt->execute(['id'=>$_SESSION['su_admin']]);
	$admin = $stmt->fetch();

	$pdo->close();
?>