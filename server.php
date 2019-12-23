<?php
	session_start();
	$name = '';
	$price = 0;
	$url = '';
	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$edit_state = false;
	$id = 0;


	if (isset($_POST['save'])) { 
		
		$name = $_POST['name'];
		$price = $_POST['price'];
		if(!filter_var($price, FILTER_VALIDATE_INT)){
			$price = 000000;
		}
		$url = $_POST['url'];
		if(filter_var($url, FILTER_SANITIZE_URL)){
			$url = 'https://static.thenounproject.com/png/1077671-200.png';
		}

		$query = "INSERT INTO info (name, price, url) VALUES ('$name', '$price','$url')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Address saved";
		header('location: index3.php');
		}
	if (isset($_POST['update'])){
		$name = mysqli_real_escape_string($_POST['name']);
		$price = mysqli_real_escape_string($_POST['price']);
		$url = mysqli_real_escape_string($_POST['name']);
		$id = mysqli_real_escape_string($_POST['id']);


		mysqli_query($db, "UPDATE info SET name = '$name', price = '$price', url = '$url' WHERE id = $id");
		header('location: index3.php');
	}

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id = $id");
		header('location: index3.php');
	}
	$results = mysqli_query($db, "SELECT * FROM info");

?>