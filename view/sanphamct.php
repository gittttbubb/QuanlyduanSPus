<div class="home">

    <div class="title-sp">
        <div class="tieude">
                <?php
                    extract($onesp);
                ?>
        </div>
        <div class="namesp"><?=$name?></div>
        <div class="noidung">
                <?php
                    extract($onesp);
                    $img=$img_path.$img;
                    echo'<div class="noidungct">
                        <img src="'.$img.'"  class="chitiet_sp" >
                        <div class=ct_phu>
                            <div class="ct_size">Size: '.$size.'</div>
                            <div class="ct_mota">'.$mota.'</div>
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value ="'.$id.'">
                                <input type="hidden" name="name" value ="'.$name.'">
                                <input type="hidden" name="img" value ="'.$img.'">
                                <input type="hidden" name="price" value ="'.$price.'">
                                <input type="submit" name="addtocart" value ="Thêm vào giỏ hàng"
                                    style="height: 40px;text-align:center;font-size:15px;color:#fff;
                                     background-color:red; border:1px solid; border-radius:5px">
                            </form>
                        </div>
                        <div class="product-detail-support" >
                                <p>Vận chuyển miễn phí trong bán kính 10km</p>
                                <p>Đổi trả trong vòng 5 ngày</p>
                                <p>Nhà cung cấp xuất hóa đơn trực tiếp cho sản phẩm này</p>
                            </div>
                    </div>';
                ?>
                
        </div>
    </div>
    <div class="title-sp">
        <div class="tieude">
                Bình luận
        </div>
        <div class="noidung">
                Chưa làm được
        </div>
    </div>
    <div class="title-sp">
        <div class="tieude">
                Sản phẩm cùng loại
        </div>
        <div style="display: flex;">
                 <?php
                    foreach ($sp_cungloai as $sp_cungloai) {
                        extract($sp_cungloai);
                        $img=$img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo'<li style="list-style: none; height:200px; width:200px;text-align: center ">
                                <a href="'.$linksp.'" style="color:#161414">
                                <img src="'.$img.'" style="height:80%;width: 80%;">
                                <div >'.$name.'</div>
                                </a>
                            </li>';
                    }
                 ?>
        </div>
    </div>
</div>