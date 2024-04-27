<div class="home">

    <div class="title-sp">
        <div class="tieude">
                
        </div>
        <div style="font-size:30px; margin-bottom:20px;">Sản phẩm <?=$tendm?></div>
        <div class="noidung">
            <?php
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $img_path . $img;
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    echo
                        '<li class="content__row-main-li" id="nike1" ><a href="'.$linksp.'"><img src="' . $hinh . '" class="content__row-main-img"></a>
                            <div class="content__row-main-li-d">' . $price . ' ₫</div>
                            <a href="'.$linksp.'" style="color:black">' . $name . '</a>
                         </li>'
                    ;
                }
            ?>
                
        </div>
    </div>

    
</div>