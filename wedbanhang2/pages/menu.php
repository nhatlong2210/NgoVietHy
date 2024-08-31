<?php
	session_start();
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
	if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
		unset($_SESSION['dangnhap']);
		
	}
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php"> Trang chủ</a></li>
				<?php
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a href="index.php?ql=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
				<?php
				}
				?>
				<li><a href="index.php?ql=giohang"> Giỏ hàng </a></li>
				<li><a href="index.php?ql=lienhe"> Liên hệ</a></li>
				<?php
					if(isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])){
						?>
						<li><a href="index.php?dangxuat=1"> Đăng xuất </a></li>
						<li><a href="index.php?ql=thaydoimatkhau"> Đổi mật khẩu </a></li>
						<?php
					}else{
						?>
						<li><a href="index.php?ql=dangky"> Đăng ký</a></li>
						<?php
					}
				?>
				<li>
					<form action="index.php?ql=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
					</form>
				</li>
			</ul>
</div>