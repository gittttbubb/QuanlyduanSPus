<div class="row_addone" style="padding:120px">
        <div>
            <h2>Đơn hàng của bạn</h2>
        </div>
        <table border="1" cellpadding="5" cellspacing="20" style="border: 1px solid #888686; border-collapse: collapse; margin-bottom: 20px;text-align: center;">
                <tr>  
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng mặt hàng</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                </tr>
                
                <tr>
                <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr>  
                                    <th>DAM-'.$bill['id'].'</th>
                                    <th>'.$bill['ngaydathang'].'</th>
                                    <th>'.$countsp.'</th>
                                    <th>'.$bill['total'].'</th>
                                    <th>'.$ttdh.'</th>
                                </tr>
                            ';
                        }
                    }
                ?>
                </tr>
               
        </table>
    </div>