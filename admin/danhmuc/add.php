<div class='row_add'>
    <div>
        <h2>Thêm loại sản phẩm</h2>
    </div>
    <form action="index.php?act=danhmuc" method="post">
        <div>
            Mã loại<br>
            <input id="name" name="maloai" type="text" value=""><br>
        </div>
        <div>
            Tên loại<br>
            <input name="tenloai" type="text" value=""><br>
        </div>
        <div>
        <input type="submit" name="themmoi" value="Thêm mới" />
        <input type="reset" name="" value="Nhập lại" />
        <a href="index.php?act=listdm"><input type="button" value = "Danh sách"></a>
        </div>
        <?php
        if(isset($thongbao) && ($thongbao!=""))  echo $thongbao;
        ?>
    </form>
</div>