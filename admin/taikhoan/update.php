<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class='row_add'>
    <div>
        <h2>Cập nhật tài khoản</h2>
    </div>
    <form action="index.php?act=updatetk" method="post">
        
        <div>
            Tên đăng nhập<br>
            <input name="user" type="text" value="<?=$user?>"><br>
        </div>
        <div>
            Mật khẩu<br>
            <input name="pass" type="text" value="<?=$pass?>"><br>
        </div>
        <div>
            Email<br>
            <input name="email" type="text" value="<?=$email?>"><br>
        </div>
        <div>
            Địa chỉ<br>
            <input name="address" type="text" value="<?=$address?>"><br>
        </div>
        <div>
            Số điện thoại<br>
            <input name="tel" type="text" value="<?=$tel?>"><br>
        </div>
        <div>
            Vai trò<br>
            <input name="role" type="text" value="<?=$role?>"><br>
        </div>
        <div>
            <input type="hidden" name="id"  value="<?=$id ?>">
            <input type="submit" name="capnhattk" value="Cập nhật" />
            <input type="submit" name="" value="Nhập lại" />
            <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</div>