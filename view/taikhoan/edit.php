<?php
session_start();
include "../../model/pdo.php";
include "../../model/taikhoan.php";

    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $address=$_POST['address'];
        $tel=$_POST['tel'];
        $id=$_POST['id'];
        update_taikhoan($id,$user,$pass,$email,$address,$tel);
        $_SESSION['user']=checkuser($user,$pass);
        $thongbao= "Cập nhật thành công";
     }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cập nhật tài khoản</title>
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
        height: 480px;
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
            <h3 class="text-center">Cập nhật tài khoản</h3>
            <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username" class="text-info">Email:</label><br>
                        <input type="email" name="email"  class="form-control" value="<?=$email?>">
                    </div>

                    <div class="form-group">
                        <label for="username" class="text-info">Username:</label><br>
                        <input type="text" name="user" id="username" class="form-control" value="<?=$user?>">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="password" name="pass" id="password" class="form-control" value="<?=$pass?>">
                    </div>
                    <div class="form-group">
                        <label for="username" class="text-info">Address:</label><br>
                        <input type="text" name="address" id="username" class="form-control" value="<?=$address?>">
                    </div>
                    <div class="form-group">
                        <label for="username" class="text-info">Phone:</label><br>
                        <input type="text" name="tel" id="username" class="form-control" value="<?=$tel?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" class="btn-info" value="Cập nhật">
                        <a href="/TMsneaker/index.php" class="btn-move">Trang chủ</a>
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
