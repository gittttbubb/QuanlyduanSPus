<div class='row_add'>
    <div>
        <h2>Thêm sản phẩm</h2>
    </div>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div>
            Danh mục<br>
            <select name="iddm" id="">
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                ?>
                
            </select>
        </div>
        <div>
            Tên sản phẩm<br>
            <input name="tensp" type="text"><br>
        </div>
        <div>
            Giá<br>
            <input name="giasp" type="text"><br>
        </div>
        <div>
            Hình<br>
            <input type="file" name="hinh">
        </div>
        <div>
            Size<br>
            <input name="sizesp" type="text"><br>
        </div>
        <div>
            Mô tả<br>
            <textarea name="mota" id="" cols="10" rows="10"></textarea>
        </div>
        
        <div>
            <input type="submit" name="themmoi" value="Thêm mới" />
            <input type="reset" name="" value="Nhập lại" />
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>