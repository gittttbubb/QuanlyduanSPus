<style>
    table {
        width: 90%;
    }
    .row_addone{
        margin-top: 40px;
        margin-left:100px;
    }
  
</style>

<form action="index.php?act=billconfirm" method="post">
<div class="row_addone">
    <div>
        <h2>Thông tin đặt hàng</h2>
    </div>
    <table >
        <?php
            if(isset($_SESSION['user'])){
                $name=$_SESSION['user']['user'];
                $address=$_SESSION['user']['address'];
                $email=$_SESSION['user']['email'];
                $tel=$_SESSION['user']['tel'];
            }else{
                $name="";
                $address="";
                $email="";
                $tel="";
            }
        ?>
            <tr>
                <td>Người đặt hàng</td>
                <td><input type="text" name="user" value="<?=$user?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="address" value="<?=$address?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?=$email?>"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input type="text" name="tel"value="<?=$tel?>"></td>
            </tr>
    </table>
</div>
<div class="row_addone">
    <div >
        <h2>Phương thức thanh toán</h2>
    </div>
    
            <td><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</td>
            <td><input type="radio" name="pttt" >Chuyển khoản ngân hàng</td>
            <td><input type="radio" name="pttt" >Thanh toán online</td>
        
</div>
<div >
<div class="row_addone">
    <div>
        <h2>Thông tin giỏ hàng</h2>
    </div>
    <table  border="1" cellpadding="5" cellspacing="20" style="border: 1px solid #888686; border-collapse: collapse; margin-bottom: 20px;text-align: center;">
            
            <?php viewcart(0);?>
            
    </table>
    <input type="submit" name="dongydathang" value="Đồng ý đặt hàng" style="margin:20px 0px 20px; height:40px; width:auto; font-size: 20px; text-align: center;
     border: 1px solid red; border-radius:5px; background-color:red; color:antiquewhite;">
</div>
</form>