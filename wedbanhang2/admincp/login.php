
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
    <style type="text/css">
        body{
            background: #f2f2f2;
        }
        .wrapper1 {
        width: 15%;
        margin: 0 auto;
        }
        table.table_login {
         width: 120%;
        }
        table.table_login tr td {
        padding: 8px;
        }   

    </style>
</head>
<body>
<div class="wrapper1">
    <form action="" autocomplete="off" method="POST">
    <table border="1" class="table_login" style="text-align:center ; border-collapse:collapse">
        <tr>
            <td colspan="2">
                <h3>Đăng nhập </h3>
        </td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="username"> </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password"> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"> </td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>
<?php
            session_start();
            include('config/config.php');
            if(isset($_POST['dangnhap'])){
                $taikhoan= $_POST['username'];
                $matkhau= md5($_POST['password']);
                $sql= "SELECT * FROM tbl_admin WHERE  username='".$taikhoan."' AND  password='".$matkhau."' LIMIT 1";
                $row = mysqli_query($mysqli,$sql);
                $count = mysqli_num_rows($row);
                if($count>0){
                    $_SESSION['dangnhap'] = $taikhoan;
                    header(("Location:index.php"));
                }else{
                    echo '<p style="color:red ;padding-left: 600px;">Tài khoản hoặc mật khẩu không chính xác!!!</p> ';
                    //header(("Location:login.php"));
                }
            }
?>