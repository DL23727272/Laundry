<?php

	$username = $_POST['username'];
	$password= $_POST['password'];

    if ($username ==""){
    echo "<script>alert('Fill up username!'); window.location = 'login.html';</script>";
    }
    else if ($password ==""){
        echo "<script>alert('Fill up password!'); window.location = 'login.html';</script>";
        }
    else if(strlen(trim($password))  <  8 ) {
    echo "<script>alert('Password is at least 8 characters!'); window.location = 'login.html';</script>";
    }
    else{
        echo "<script>window.location = 'index.html';</script>";
    }

?>