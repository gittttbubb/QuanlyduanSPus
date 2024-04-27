<?php
include "../../model/pdo.php";
include "../../model/taikhoan.php";
    
    if(isset($_POST['dangky'])&&($_POST['dangky'])){
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        insert_taikhoan($email,$user,$pass);
        $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập !!!!";
    }

    // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
    //     $email = $_POST['email'];
    //     $user = $_POST['user'];
    //     $pass = $_POST['pass'];
    
    //     try {
    //         insert_taikhoan($email, $user, $pass);
    //         $response = array('status' => 'success', 'message' => 'Đã đăng ký thành công. Vui lòng đăng nhập.');
    //     } catch (Exception $e) {
    //         $response = array('status' => 'error', 'message' => 'Có lỗi xảy ra khi đăng ký.');
    //     }
    
    //     // Thêm thẻ header để chỉ định định dạng là JSON và không cache
    //     header('Content-Type: application/json');
    //     header('Cache-Control: no-cache, must-revalidate');
    //     header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
    
    //     // Trả về kết quả dưới dạng JSON
       
    //     exit;
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <style type="text/css">
    body {
            margin: 0;
            padding: 0;
            background-color:#17a2b8;
            
        }
    #login{
        padding:30px 400px 400px 400px;
    }
    .container{

        width: 100%;
        height: 350px;
        border: 1px solid #9C9C9C;
        border-radius: 10px;
        background-color: #EAEAEA;
        color:#17a2b8   ;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .text-center{
        margin-top: 10px;
        text-align: center;
        font-size: 35px;
    }
    .form-group{
        font-size: 20px;
        margin-top: 8px;
    }
    .form-control{
    display: block;
    width: 90%;
    padding: .375rem .75rem;
    font-size: 15px;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .btn-info{
    margin-top: 16px;
    font-size: 18px;
    color:#fff;
    background-color:#17a2b8;
    border: 1px solid #17a2b8;
    border-radius: 5px;
    width: 100px;
    height: 30px;
    }
    .btn-info:hover{
        cursor: pointer;
    }
    .btn-move{
        text-decoration:none; 
        color:black; 
        margin-left: 10px;
    }
        </style>
</head>
<body>
    
    <div id="login">
        <div class="container">
            <form action="" method="POST">
                <h3 class="text-center">Sign up</h3>
                    <div class="form-group">
                        <label for="username" class="text-info">Email:</label><br>
                        <input type="email" name="email"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username" class="text-info">Username:</label><br>
                        <input type="text" name="user" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="password" name="pass" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="dangky" class="btn-info" value="Submit">
                        <a href="login.php" class="btn-move">Login</a>
                    </div>
            </form>           
            <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo $thongbao;
            }
            ?> 
        </div>
    </div>
</body>
</html>
