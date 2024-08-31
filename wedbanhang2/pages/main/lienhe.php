
<p style="font-size: 28px;font-weight: bold;padding-left: 400px;color: blue;">Thông tin liên hệ</p>
<?php
    $sql_lh= "SELECT * FROM tbl_lienhe WHERE id=1";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>
  <?php
    while ($dong= mysqli_fetch_array($query_lh)){
  ?>    
    <p style="adding-left: 50px;"><?php echo $dong['thongtinlienhe']?></p>

  <?php
    }
  ?>

</table>