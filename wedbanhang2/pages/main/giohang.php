
<p style="font-size: 20px;font-weight: bold;">Giỏ hàng
    <?php
      if(isset($_SESSION['dangky'])){
        echo ' của '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
      }
    ?>
</p>
<?php
    if(isset($_SESSION['cart'])){
        
    }
?>
<table style="width:100%; text-align:center;border-collapse:collapse;" border="1">
  <tr>
    <th>ID</th>
    <th>Tên sảnn phẩm</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
        $i =0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
            $tongtien+=$thanhtien;
            $i++;
 ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $cart_item['tensanpham'] ?></td>
   
    <td>
        <a href="main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus" style="color: #970707;"></i></a>
        <?php echo $cart_item['soluong'] ?>
        <a href="main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus" style="color: #d30318;"></i></a>

    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').' VND' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').' VND' ?></td>
    <td><a style="color: red;" href="main/themgiohang.php?xoa=<?php echo $cart_item['id']?> ">Xoá</a></td>
  </tr>
  <?php
    }
    ?>
    <tr>
        <td colspan="8" ><p style="color: red;font-weight: bold;font-size: 20px;width: 30%;padding-left: 400px;float: left;"> TỔNG TIỀN: <?php echo number_format($tongtien,0,',','.').' VND' ?></p><br/>
        <p><a href="main/themgiohang.php?xoatatca=1" style="float:right;color: red;">Xoá tất cả</a></p>
        <div style="clear:both;"></div>
        <?php
            if(isset($_SESSION['dangky'])){
            ?>
                <p><a href="main/thanhtoan.php" style="color: green;font-size: 20px;font-weight: bold;">Đặt hàng</a></p>
            <?php
            }else{
            ?>
                <p><a href="index.php?ql=dangky" style="font-size: 18px;color: green;font-weight: bold;">Đăng ký đặt hàng</a></p>
            <?php
            }
        ?>
        </td>
    </tr>
    <?php
    }else{
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống  </p></td>
  </tr>
  <?php
    }
  ?>
</table>