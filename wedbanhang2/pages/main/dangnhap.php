<?php
    session_start();
    if(isset($_POST['dangnhap'])){
        $email= $_POST['email'];
        $matkhau= md5($_POST['password']);
        $sql= "SELECT * FROM tbl_dangky WHERE  email='".$email."' AND  matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header(("Location:index.php?ql=giohang"));
        }else{
            echo '<p style="color:red">Tài khoản hoặc mật khẩu không chính xác</p>';
        }
    }
?>
<form action="" autocomplete="off" method="POST" style="padding-left: 300px;padding-top: 20px;">
    <table border="1" width="60%" class="table_login" style="text-align:center ; border-collapse:collapse">
        <tr>
            <td colspan="2" style="font-size: 23px;font-weight: bold;">
                <h3>Đăng nhập khách hàng</h3>
        </td>
        </tr>
        <tr style="font-size: 20px;font-weight: bold;">
            <td >Tài khoản</td>
            <td><input type="text" size="50" name="email" placeholder="Email..."> </td>
        </tr>
        <tr style="font-size: 20px;font-weight: bold;">
            <td>Mật khẩu</td>
            <td><input type="password" size="50" name="password" placeholder="Mật khẩu..."> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"> </td>
        </tr>
    </table>
    </form>