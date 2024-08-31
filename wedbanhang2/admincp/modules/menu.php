
<ul class="admincp_list">
    <li> <a style ="text-decoration: none" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li> <a style ="text-decoration: none" href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>

    <li> <a style ="text-decoration: none" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>

    <li> <a style ="text-decoration: none" href="index.php?action=dangxuat&query=dangxuat">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?>
    </a></li>
    <li> <a style ="text-decoration: none" href="index.php?action=doimatkhau&query=doimatkhau">Đổi mật khẩu</a></li>
    
</ul>
