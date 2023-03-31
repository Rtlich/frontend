<?php
session_start();


if(!isset( $_SESSION['mail'], $_SESSION['name'],$_SESSION['role'] )){
	header('location:../Views/login.php');
}

    
    $email = $_SESSION['mail'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];

    

    include "../config.php";
    include "../Controller/cuser.php";
    // $var_value = $_GET['data'];
    // echo $var_value;

    $id=$_GET['iduser'];
    $name2 = $_GET['name'];
    $lastName = $_GET['lastname'];
    $sexe = $_GET['sexe'];
    $mail = $_GET['mail'];
    $number = $_GET['number'];
    $adress = $_GET['adress'];

    if(!empty($_GET['passnew']))
    {
        $password = $_GET['passnew'];

        $password_hached = password_hash($password,PASSWORD_DEFAULT);
    }else{
        $password = $_GET['pass'];
        $password_hached =$password;
    }

    $role2 = $_GET['role'];
    $status = $_GET['status'];
    echo $name,$lastName,$sexe,$mail;



    // create an instance of the controller
        $cuser = new cuser();

        $user = new user($id, $lastName, $name2, $adress,$number,$sexe,$mail,$role2,$password_hached,$status);
        echo "ok";
        $cuser->updateUser($user, $id);
        echo "ok2";


      
    session_destroy();

    if($role==1){

             session_start();



                $_SESSION['mail'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['role'] = $role;

        header('Location:userlist.php');
    }
    if($role==0){

             session_start();
  


                $_SESSION['mail'] = $mail;
                $_SESSION['name'] = $name2;
                $_SESSION['role'] = $role2;

        header('location:customer-profile.php');
    }
        




   


        $pdo = null;
?>