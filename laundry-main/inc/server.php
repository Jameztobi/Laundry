<?php 
	session_start();
	include('../../mysqli_connect.php');

	// initialize variables
	$price = "";
    $title = "";
    $cloth1="";
    $cloth2="";
    $cloth3="";
    $cloth4="";
    $cloth5="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
        $price=$_POST['price'];
        $title = $_POST['title'];
        $cloth1=$_POST['cloth1'];
        $cloth2=$_POST['cloth2'];
        $cloth3=$_POST['cloth3'];
        $cloth4=$_POST['cloth4'];
        $cloth5=$_POST['cloth5'];

		mysqli_query($dbc, "INSERT INTO amount (price, title, cloth1, cloth2, cloth3, cloth4, cloth5) VALUES ('$price', '$title', '$cloth1', '$cloth2', '$cloth3', '$cloth4', '$cloth5')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
    }
    
    if (isset($_POST['update'])) {
        $amountID = $_POST['amountID'];
        $price=$_POST['price'];
        $title = $_POST['title'];
        $cloth1=$_POST['cloth1'];
        $cloth2=$_POST['cloth2'];
        $cloth3=$_POST['cloth3'];
        $cloth4=$_POST['cloth4'];
        $cloth5=$_POST['cloth5'];
    
        mysqli_query($dbc, "UPDATE amount SET price='$price', title='$title', cloth1='$cloth1', cloth2='$cloth2', cloth3='$cloth3', cloth4='$cloth4', cloth5='$cloth5' WHERE amountID=$amountID");
        $_SESSION['message'] = "Address updated!"; 
        header('location: index.php');
    }

    if (isset($_GET['del'])) {
        $amountID = $_GET['del'];
        mysqli_query($dbc, "DELETE FROM amount WHERE amountID=$amountID");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: index.php');
    }