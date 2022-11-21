<?php
include 'includes/conn.php';
session_start();

if (isset($_SESSION['admin'])) {
    header('location: admin/index.php');
}
if (isset($_SESSION['operator'])) {
    header('location: su_admin/index.php');
}
if (isset($_SESSION['user'])) {
    $conn = $pdo->open();

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id_user=:id");
        $stmt->execute(['id' => $_SESSION['user']]);
        $user = $stmt->fetch();
        $name = $user['nama_depan'] . ' ' . $user['nama_belakang'];
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }



    $pdo->close();
}
