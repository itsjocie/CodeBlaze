<?php

include 'connect.php';

if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * FROM user WHERE name='$name'AND email = '$email' AND password='$password'";
    $result=$conn->query($checkEmail);

    if($result -> num_rows > 0) {
        die ("Email Address Already Exists!");
    }
    else{
        $insertQuery="INSERT INTO user(name, email, password) VALUES ('$name','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: log.php");
            exit();
        }
        else{
            echo"Error:".$conn->error;
        }
    }
}

if(isset($_POST['login'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM user WHERE name='$name' AND email='$email' AND password='$password' ";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: home.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>