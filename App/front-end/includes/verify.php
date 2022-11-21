<?php
include 'session.php';
$conn = $pdo->open();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    try {

        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $row = $stmt->fetch();
        if ($row['numrows'] > 0) {
            if (password_verify($password, $row['password'])) {
                if ($row['type'] == 1) {
                    $_SESSION['user'] = $row['id'];
                } else if ($row['type'] == 2) {
                    $_SESSION['admin'] = $row['id'];
                } else if ($row['type'] == 3) {
                    $_SESSION['su_admin'] = $row['id'];
                }
            } else {
                $_SESSION['error'] = 'Incorrect Password';
            }
        } else {
            $_SESSION['error'] = 'username not found';
        }
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = 'Input login credentails first';
}

$pdo->close();

header('location: login.php');
