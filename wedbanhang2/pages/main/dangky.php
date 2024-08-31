<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['hovaten'];
        $emai=$_POST['email'];
        $diachi=$_POST['diachi'];
        $matkhau=md5($_POST['matkhau']);
        $nhaplaiatkhau=md5($_POST['nhaplaimatkhau']);
        $dienthoai=$_POST['dienthoai'];
        if($matkhau==$nhaplaiatkhau){
            $sql_dangky = mysqli_query($mysqli,
            "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
            VALUE('".$tenkhachhang."','".$emai."','".$diachi."','".$matkhau."','".$dienthoai."')");
            if($sql_dangky){
                echo '<p style="color:green"> Bạn đã đăng ký thành công!!!</p>';
                $_SESSION['dangky']= $tenkhachhang;
                $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
                header('Location:index.php?ql=giohang');
            }
        }
        else{
            echo '<p style="color:red">Mật khẩu  nhập lại không chính xác!!!</p> ';
        }

    }
?>
<p style="font-size: 30px;
        font-weight: bold;
        padding-left: 470px;
        color: green;">Đăng ký thành viên</p>
<style type="text/css">
    table.dangky tr td {
    padding: 5px;
    text-align: center;
    }
</style>
<form action="" method="POSt" style="padding-left: 260px;">
<table class="dangky" border="1" width="70%" style="border-collapse:collapse;padding: 5px;
    text-align: center;
    font-size: 17px;
    font-weight: bold;">
    <tr>
        <td>Họ và tên</td>
        <td><input type="" size="60" name="hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="60" name="email"></td>
    </tr>
    <tr>
        <td>Số điện thoại</td>
        <td><input type="text" size="60" name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" size="60" name="diachi"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" size="60" name="matkhau"></td>
    </tr>
    <tr>
        <td>Nhập lại mật khẩu</td>
        <td><input type="password" size="60" name="nhaplaimatkhau"></td>
    </tr>
    <tr>
        <td ><input type="submit"  name="dangky" value="Đăng ký" style="color: black;font-size:17px;font-weight: bold;"></td>
        <td><a style ="color: black;font-weight:bold;font-size: 18px;" href="index.php?ql=dangnhap">Đăng nhập nếu có tài khoản</a></td>        
    </tr>
</table>
</form>