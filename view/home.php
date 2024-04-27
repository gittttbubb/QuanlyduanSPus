<div class="home">
    <!--Page1-->
    <div class="content active" id="content">
        <div class="content__row">
            <div class="content__row-side">
                <h2 class="content__side-h2">
                    Danh mục sản phẩm
                </h2>
                <ul class="content__side-ul">
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li >
                                <a href="' . $linkdm . '" style="color:black;">' . $name . '</a>
                            </li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="content__row-main">
                <?php
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh = $img_path . $img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo
                            '<li class="content__row-main-li" id="nike1"><a href="'.$linksp.'"><img src="' . $hinh . '" class="content__row-main-img"></a>
                                <div class="content__row-main-li-d">' . $price . ' ₫</div>
                                <a href="'.$linksp.'" style="color:black">' . $name . '</a>
                            </li>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>