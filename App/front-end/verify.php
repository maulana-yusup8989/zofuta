<?php
	include 'includes/session.php';
	$conn = $pdo->open();
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM user WHERE username = :username");
			$stmt->execute(['username'=>$username]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
					if($row['password']== $password){
						if($row['status']==1){
							$_SESSION['user'] = $row['id_user'];
							
						}
						else if($row['status']==2){
							$_SESSION['admin'] = $row['id_user'];
						}
						else{
							$_SESSION['su_admin'] = $row['id_user'];
						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
					}
			}
			else{
				$_SESSION['error'] = 'Username not found';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	$pdo->close();
	header('location:index.php');

	
?>