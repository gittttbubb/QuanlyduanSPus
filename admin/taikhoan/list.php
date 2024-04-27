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
        <h2>Danh sách khách hàng</h2>
    </div>
            <table border = "1" cellpadding = "5" cellspacing = "20" style="margin-top:20px;margin-bottom:20px;align-items: center;">
                <tr>
                   <th></th>
                    <th>Mã tài khoản</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số ĐT</th>
                    <th>Vai trò</th>
                   <th></th>
                </tr>
                <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk="index.php?act=suatk&id=".$id;
                        $xoatk="index.php?act=xoatk&id=".$id;
                        echo'<tr>
                        <td><input type="checkbox" name="" id="" ></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td> <a href="'.$suatk.'"> <input type="button" value="Sửa" ></a> <a href="'.$xoatk.'"><input type="button" value="Xóa" ></a></td>
                     </tr>';
                    }
                ?>
                
            </table>
           
        </div>