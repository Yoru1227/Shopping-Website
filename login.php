<?php
    header("Content-Type: text/html; charset=utf8");
    //讀取index.html的帳號密碼
    $username = $_POST['username'];
    $password = $_POST['password'];
    //連結資料庫
    $con = new mysqli('localhost','root','','shopping_system');
    //設定編碼為UTF8
    mysqli_query($con, "SET NAMES UTF8");
    if($con->connect_error){//連線失敗
        die("連線失敗 : ".$con->connect_error);
    }
    else{//連線成功
        $stmt = $con->prepare("select * from customer where username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                header("refresh:2;url=main.html");
                echo "<h2>登入成功，將於2秒後自動跳轉至服務頁面</h2>";
            }
            else{
                header("refresh:2;url=index.html");
                echo "<h2>無效的帳號或密碼，將於2秒後回到登入頁面</h2>";
            }
        }
        else{
            header("refresh:2;url=index.html");
            echo "<h2>無效的帳號或密碼，將於2秒後回到登入頁面</h2>";
        }
    }
    $con->close();
?>