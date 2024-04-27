<style> 
table, th, td {  
    border: 1px solid  #888686;
    border-collapse: collapse;
}
table{
    width: 100%;
    margin-top:20px;margin-bottom:20px;
}
td{
    text-align: center;
}

</style>
<div class="row_add">
    <div>   
        <h2>Danh sách sản phẩm</h2>
    </div>
            <table border = "1" cellpadding = "5" cellspacing = "20" style="margin-top:20px;margin-bottom:20px;align-items: center;">
                <tr>
                   <th></th>
                   <th>Mã loại</th>
                   <th>Tên loại</th>
                   <th></th>
                </tr>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo'<tr>
                        <td><input type="checkbox" name="" id="" ></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td> <a href="'.$suadm.'"> <input type="button" value="Sửa" ></a> <a href="'.$xoadm.'"><input type="button" value="Xóa" ></a></td>
                     </tr>';
                    }
                ?>
                
            </table>
            <div>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=danhmuc"><input type = "button" value = "Nhập thêm"></a>
            </div>
        </div>