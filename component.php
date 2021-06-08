<?php

function getData(){
    $con = new mysqli('localhost','root','','shopping_system');
    mysqli_query($con, "SET NAMES UTF8");
    if($con->connect_error){
        echo "$con->connect_error";
        die("資料庫連線失敗 : ". $con->connect_error);
    }
    else{
        $sql = "select * from item";

        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}

function component($id,$name,$price,$img,$description){
    $element = "
        <div class=\"card w-auto my-auto\">
            <a href=\"item/$img\">
                <div class=\"card-header\">
                    <img src=\"images/items/$id.jpg\" width=\"200\" height=\"200\"/>
                </div>
                <div class=\"card-body text-center\">
                    <h4>$name</h4>
                </div>
                <div class=\"card-footer\">
                    <h5><span class=\"price\">$$price</span></h5>
                </div>
            </a>
        </div>
    ";
    echo $element;
}
?>