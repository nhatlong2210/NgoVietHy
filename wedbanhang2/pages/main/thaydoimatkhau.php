<?php
    if(isset($_POST['doimatkhau'])){
        $taikhoan= $_POST['email'];
        $matkhau_cu= md5($_POST['password_cu']);
        $matkhau_moi= md5($_POST['password_moi']);
        $sql= "SELECT * FROM tbl_dangky WHERE  email='".$taikhoan."' AND  matkhau='".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."' 
            WHERE  email='".$taikhoan."' AND  matkhau='".$matkhau_cu."' ");
            echo '<p style="color:green">Đổi mật khẩu thành công!!!</p> ';
        }else{
            echo '<p style="color:red">Tài khoản hoặc mật khẩu không chính xác!!!</p> ';
        }
    }
?>

<form action="" autocomplete="off" method="POST" style="padding-left:400px">
    <table border="1" class="table_login" style="text-align:center ; border-collapse:collapse">
        <tr>
            <td colspan="2">
                <h3>Đổi mật khẩu </h3>
        </td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="email"> </td>
        </tr>
        <tr>
            <td>Mật khẩu cũ </td>
            <td><input type="password" name="password_cu"> </td>
        </tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td><input type="password" name="password_moi"> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"> </td>
        </tr>
    </table>
    </form>