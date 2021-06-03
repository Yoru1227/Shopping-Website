<?php 
    header("Content-Type:text/html; charset=utf-8");
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli('localhost','root','','shopping_system');
    mysqli_query($con, "SET NAMES UTF8");
    if($con->connect_error){
        echo "$con->connect_error";
        die("Connection Failed : ". $con->connect_error);
    }
    else{
        $stmt = $con->prepare("insert into customer(name, gender, email, phone, address, username, password ) values(?, ?, ?, ?, ?, ?, ?) ");
        $stmt->bind_param("sssisss", $name, $gender, $email, $phone, $address, $username, $password );
        
        $execval = $stmt->execute();
        echo "註冊成功!...";
        $stmt->close();
        $con->close();
    }
?>