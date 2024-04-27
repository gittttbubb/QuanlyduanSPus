    <style>
        table {
            width: 90%;
        }
        .row_addone{
            margin-top: 40px;
            margin-left:100px;
        }
    
    </style>

    <div class="row_addone">
        <div >
            <h2>Cảm ơn</h2>
        </div>
        <div>Cảm ơn quý khách đã đặt hàng!!</div>
    </div>
    <div >
        <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }
        ?>
    <div class="row_addone">
            <div >
                <h2>Thông tin đơn hàng</h2>
            </div>
            <div>
                <li>Mã đơn hàng: DAM<?=$bill['id']?></li> 
                <li>Ngày đặt hàng: <?=$bill['ngaydathang']?></li> 
                <li>Tổng đơn hàng: <?=$bill['total']?></li> 
                <li>Phương thức thanh toán: <?=$bill['bill_pttt']?></li>
            </div>
    </div>
    <div >
    <div class="row_addone">
        <div>
            <h2>Thông tin đặt hàng</h2>
        </div>
        <table >
                <tr>
                    <td>Người đặt hàng</td>
                    <td><?=$bill['bill_user']?></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><?=$bill['bill_address']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?=$bill['bill_email']?></td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><?=$bill['bill_tel']?></td>
                </tr>
        </table>
    </div>

    <div >
    <div class="row_addone">
        <div>
            <h2>Chi tiết giỏ hàng</h2>
        </div>
        <table  border="1" cellpadding="5" cellspacing="20" style="border: 1px solid #888686; border-collapse: collapse; margin-bottom: 20px;text-align: center;">
                
                <?php  bill_chi_tiet($billct)?>
                
        </table>
    </div>
        