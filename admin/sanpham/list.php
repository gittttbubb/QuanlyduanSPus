<style>
    table,
    th,
    td {
        border: 1px solid #888686;
        border-collapse: collapse;
    }

    table {
        width: 100%;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    td {
        text-align: center;
    }
</style>
<div class="row_add">
    <div>
        <h2>Danh sách sản phẩm</h2>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw" style="width:100px">
        <select name="iddm" id="" style="margin-left:20px">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="Go">
    </form>
    <table border="1" cellpadding="5" cellspacing="20">
        <tr>
            <th></th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Size</th>
            <th>Giá</th>
            <th></th>
        </tr>
        <?php
        foreach ($listsanpham as $sanpham) {
            extract($sanpham);
            $suasp = "index.php?act=suasp&id=".$id;
            $xoasp = "index.php?act=xoasp&id=".$id;
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='".$hinhpath."'height='80'>";
            } else {
                $hinh = "No photo";
            }

            echo '<tr>
                        <td><input type="checkbox" name="" id="" ></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $size . '</td>
                        <td>' . $price . '</td>
                        <td> <a href="' . $suasp . '"> <input type="button" value="Sửa" ></a> <a href="' . $xoasp . '"><input type="button" value="Xóa" ></a></td>
                     </tr>';
        }
        ?>

    </table>
    <div>
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
    </div>
</div>