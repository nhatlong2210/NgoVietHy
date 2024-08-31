<?php
    $sql_probv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_baiviet ='$_GET[id]' 
	ORDER BY id_baiviet DESC lIMIT 1";
    $query_probv= mysqli_query($mysqli,$sql_probv);
    $query_pro= mysqli_query($mysqli,$sql_probv);
	$row_title = mysqli_fetch_array($query_probv);
?>
<h3 style="padding-left: 20px;font-size: 20px;margin-top:7px;margin-bottom: 5px;"> Bài viết : <?php echo $row_title['tenbaiviet']?> </h3>
<ul class ="baiviet">
					<?php
					while($row_pro =mysqli_fetch_array($query_pro)){
					?>
					<li>    
                            <h4><?php echo $row_pro['tenbaiviet']?></h4>
							<img style="height: 300px;width:70%;padding-left: 150px;" 
                            src ="../admincp/uploadsbaiviet/<?php echo $row_pro['hinhanh'] ?>">
                            <p style="padding-left:150px;"><?php echo $row_pro['tomtat']?></p>
                            <p style="font-size: 18px;"><?php echo $row_pro['noidung']?></p>
					</li>
					<?php
					}
					?>
				</ul>