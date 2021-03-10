<?php include'db.php';

$errors=array();
$username="";
$email="";
$password="";
$passwordConf="";

if (isset($_POST['register-btn'])) {
    $errors=array();

    if(empty($_POST['username'])){
        array_push($errors, 'username is required');
    }

    if(empty($_POST['email'])){
        array_push($errors, 'email is required');
    }

    if(empty($_POST['password'])){
        array_push($errors, 'password is required');
    }

    if(empty($_POST['passwordConf'])){
        array_push($errors, 'password is required');
    }

    if($_POST['passwordConf']!== $_POST['password']){
        array_push($errors, 'passwords do not match');
    }


    if(count($errors)===0){
        unset($_POST['register-btn'], $_POST['passwordConf']);
        $_POST['admin']=0;
        $_POST['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id=create('admin', $_POST);
        $user=SelectOne('admin', ['id' => $user_id]);

        //log user in
        $_SESSION['id']=$user['id'];
        $_SESSION['username']=$user['username'];
        $_SESSION['admin']=$user['admin'];
        $_SESSION['message']='You are now logged in';
        $_SESSION['type']='success';
        header('location: index.php');
        exit();
    } 
    else{
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $passwordConf=$_POST['passwordConf'];
    }   

}

if (isset($_POST['login-btn'])) {
    $errors=array();

    if(empty($_POST['username'])){
        array_push($errors, 'username is required');
    }

    if(empty($_POST['password'])){
        array_push($errors, 'email is required');
    }

    if(count($errors)===0){
        $user=SelectOne('admin', ['username' => $_POST['username']]);

        if($user && password_verify($_POST['password'], $user['password'])){
                //log user in
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['admin']=$user['admin'];
            $_SESSION['message']='You are now logged in';
            $_SESSION['type']='success';
            header('location: admin/posts/index.php');
            exit();
        }
        else{
            array_push($errors, 'invalid username and password');
        }
    }
}

?>