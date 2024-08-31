<?php

	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc =tbl_danhmuc.id_danhmuc
	ORDER BY tbl_sanpham.id_sanpham DESC ";
    $query_pro= mysqli_query($mysqli,$sql_pro);
?>	
<h3 style=" padding-left: 20px;
			font-size: 20px;
			margin-top: 7px;
			margin-bottom: 5px;"> Sản phẩm </h3>
				<ul class ="product_list">
					<?php
						while($row =mysqli_fetch_array($query_pro)){
					?>
					<li>
						<a href="index.php?ql=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src ="../admincp/uploads/<?php echo $row['hinhanh'] ?>  ">
							<p class="title_product"> <?php echo $row['tensanpham'] ?></p>
							<p class="price">Giá : <?php echo number_format($row['giasp'],0,',','.').' VND' ?></p>
				
						</a>
					</li>
					<?php
						}
					?>
					
				</ul>
				