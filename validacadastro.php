<?php 
	session_start();

	include "BDConnect.php";

	if (isset($_POST['submitbtn'])) {

		$target_dir = "Img/";

		$nome 		= $_POST['nome'];
		$sobrenome 	= $_POST['sobrenome'];
		$email 		= $_POST['email'];
		$username 	= $_POST['username'];
		$senha 		= $_POST['senha'];
		$recsenha 	= $_POST['recsenha'];
		

		if (isset($_FILES['file'])) {

			$foto = $_FILES['file']['name'];
			
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
	    		$_SESSION['imgerro'] = "O arquivo deve conter uma extensão .jpg, .png ou .jpeg";

	    		header('Location: ' . $_SERVER['HTTP_REFERER']);
			}

		}else{
		
			$foto = "Default_Icon.png";
		
	   	}
	   	
    		$selectusername = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_email = '$email'");

    		$rowuser = mysqli_affected_rows($con);
    		
    		if ($rowuser > 0) {
    			$_SESSION['usuario_existente'] = "Esse usuario já existe";
    			header('Location: ' . $_SERVER['HTTP_REFERER']);
    		} else {

				move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
				
				$insert = mysqli_query($con, "INSERT INTO usuario(usuario_nome, usuario_sobrenome, usuario_imgperfil, usuario_email, usuario_username, usuario_senha, usuario_recuperacao, usuario_nivelacesso) VALUES('$nome', '$sobrenome', '$foto', '$email', '$username', '$senha', '$recsenha', '0')");

				$pesquisaId = mysqli_query($con, "SELECT * FROM usuario WHERE usuario_id = (SELECT MAX(usuario_id) FROM usuario)");

				$fetchId = mysqli_fetch_array($pesquisaId);		

				$_SESSION['usuario_id'] = $fetchId['usuario_id'];

				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
		
	}


 ?>