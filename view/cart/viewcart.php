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
        <h2>Chi tiết Giỏ hàng</h2>
    </div>
    
    <table border="1" cellpadding="5" cellspacing="20">
        
       <?php viewcart(1);?>

    </table>
    <div>
    <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a><a href="index.php?act=delcart">
        <input type="button"value="Xóa giỏ hàng"></a>
    </div>
</div>