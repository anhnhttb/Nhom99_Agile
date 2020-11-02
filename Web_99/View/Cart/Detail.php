<div >
<h2><span><a href="#">Chi tiết giỏ hàng</a></span></h2>
<p>
<table  cellpadding="0" cellspacing="0" class="table" width="100%">
    <thead class="thead-pink">
        <tr>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Xóa</th>
            <th scope="col">Sửa</th>
        </tr>
    </thead>
<?php
$sum=0;
    foreach($_SESSION["mycart"] as $key=>$val){
        $row=$pro->GetProductByID($key);
        $sum+=$val*$row["Price"];
        echo "<tr>";
        echo "<td><img height=\"50\"  src=\"Upload/$row[ImageUrl]\" /></td>";
        echo "<td>".number_format($row["Price"],0)."</td>";
        echo "<td>$val</td>";
        echo "<td><a href=\"index.php?mod=cart&act=delete&id=$key\" onclick=\"return IsDelete()\" ><img src=\"Images/Delete.gif\" width=\"16\" height=\"16\" /></a></td>";
        echo "<td><a href=\"index.php?mod=cart&act=edit&id=$key\"><img src=\"Images/Edit.gif\" /></a></td>";
        echo "</tr>";
    }
?>
<tr><td>Tổng tiền</td><td colspan="4"><?php echo number_format($sum,0);?></td></tr>
</table>
<center><a href="index.php?mod=order&act=add" class="btn btn-outline-primary">Đặt hàng</a></center>
</p>
</div> 
