<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class='row_add'>
    <div>
        <h2>Cập nhật sản phẩm</h2>
    </div>
    <form action="index.php?act=updatedm" method="post">
        <div>
            Mã loại<br>
            <input id="name" name="maloai" type="text" value=""><br>
        </div>
        <div>
            Tên loại<br>
            <input name="tenloai" type="text" value="<?php if (isset($name) && ($name != "")) echo $name; ?>"><br>
        </div>
        <div>
            <input type="hidden" name="id"  value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="Cập nhật" />
            <input type="submit" name="" value="Nhập lại" />
            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>