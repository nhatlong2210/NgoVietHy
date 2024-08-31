<?php
    if(isset($_POST['tukhoa'])){
        $tukhoa =$_POST['tukhoa'];
    }
    else{
        $tukhoa='';
    }
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
    WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%$tukhoa%'
	ORDER BY id_sanpham DESC ";
    $query_pro= mysqli_query($mysqli,$sql_pro);
   // $row = mysqli_fetch_array($query_pro);
?>
<h3> Từ khoá tìm kiếm : <?php echo $tukhoa ?></h3>
				<ul class ="product_list">
					<?php
						while($row =mysqli_fetch_array($query_pro)){
					?>
					<li>
						<a href="index.php?ql=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src ="../admincp/uploads/<?php echo $row['hinhanh'] ?>  ">
							<p class="title_product">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="price"><?php echo number_format($row['giasp'],0,',','.').'vnd' ?></p>
							<p style="text-align:center ; color:black , solid:black">Danh mục : <?php echo $row['tendanhmuc'] ?></p>
						</a>
					</li>
					<?php
						}
					?>
					
				</ul>