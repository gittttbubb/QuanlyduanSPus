<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/".$img;
if (is_file($hinhpath)) {
    $hinh = "<img src='".$hinhpath."'height='100'>";
} else {
    $hinh = "No photo";
}
?>
<div class='row_add'>
    <div>
        <h2>Cập nhật sản phẩm</h2>
    </div>
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <select name="iddm" id="" style="margin-left:20px">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                if($iddm == $id) $s="selected"; else $s="";
                    echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
            }
            ?>

        </select>
        <div>
            Tên sản phẩm<br>
            <input name="tensp" type="text" value="<?=$name?>"><br>
        </div>
        <div>
            Giá<br>
            <input name="giasp" type="text" value="<?=$price?>"><br>
        </div>
        <div>
            Hình<br>
            <input type="file" name="hinh">
            <?=$hinh?>
        </div>
        <div>
            Size<br>
            <input name="sizesp" type="text" value="<?=$size?>"><br>
        </div>
        <div>
            Mô tả<br>
            <textarea name="mota" id="" cols="10" rows="10"><?=$mota?></textarea>
        </div>

        <div>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value=" Cập nhật" />
            <input type="reset" name="" value="Nhập lại" />
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>