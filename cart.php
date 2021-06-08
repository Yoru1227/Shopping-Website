<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>購物系統</title>
		<link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<style>
			body{
				background-image: url('images/bg.jpg');
 				background-repeat: no-repeat;
				background-attachment: fixed;
			  	background-size: 100% 100%;
			}
		</style>
    </head>
    <body>
        <table class="table table-light text-center table-striped">
            <thead>
                <tr>
                    <th colspan="6">您的購物車</th>
                </tr>
                <tr>
                    <th scope="col">訂單編號</th>
                    <th scope="col">商品編號</th>
                    <th scope="col">商品名稱</th>
                    <th scope="col">數量</th>
                    <th scope="col">金額</th>
                    <!--<th scope="col">狀態</th>-->
                </tr>
            </thead>
            <tbody>
                <?php include("showcart.php");?>
            </tbody>
            <!-- <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>喝汽水涼帽</td>
                    <td>1</td>
                    <td>1000000000</td>
                    <th>未結帳</th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>2</td>
                    <td>馬桶通樂吸盤</td>
                    <td>1</td>
                    <td>5</td>
                    <th>未結帳</th>
                </tr>
                <tr>
                    
                    <th colspan="6">
                        <form action="cart.php" method="post">
                            <input type="submit" value="結帳" class="bnt btn-success">
                        </form>
                    </th>
                </tr>
            </tbody> -->
        </table>
    </body>
</html>