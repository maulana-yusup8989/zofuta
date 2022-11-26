<?php
include 'conn.php';
session_start();

if (isset($_SESSION['admin'])) {
    header('location: ../../back-end/admin/index.php');
}
if (isset($_SESSION['su_admin'])) {
    header('location: ../../App/back-end/su_admin/index.php');
}
if (isset($_SESSION['user'])) {

    $conn = $pdo->open();

    try {
        $stmt = $conn->prepare("SELECT * FROM user WHERE id_user=:id");
        $stmt->execute(['id' => $_SESSION['user']]);
        $user = $stmt->fetch();
        $name = $user['nama_depan'] . ' ' . $user['nama_belakang'];
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }



    $pdo->close();
}
?>