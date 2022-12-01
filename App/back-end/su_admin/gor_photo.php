<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM gor WHERE id_gor=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../../img/'.$new_filename);	
		}
		
		try{
			$stmt = $conn->prepare("UPDATE gor SET foto_gor=:photo WHERE id_gor=:id");
			$stmt->execute(['photo'=>$filename, 'id'=>$id]);
			$_SESSION['success'] = 'Product photo updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select product to update photo first';
	}

	header('location: data_gor.php');
?>