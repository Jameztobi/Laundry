<?php include'../../db.php';

if(isset($_POST['add-topics'])){
    unset($_POST['add-topics']);
    $topic_id=create('topics', $_POST);
    $_SESSION['message']='Topic created successfully';
    $_SESSION['type']='success';
    header('location: ../../admin/topics/index.php');
    exit();
    //dd($_POST);
}


?>