<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/taikhoan.php";
   
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($user,$pass);
            if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                $thongbao="Đăng nhập thành công !!!!";
                echo "<script type='text/javascript'>alert('$thongbao');</script>";
                header('Location:/TMsneaker/index.php');
                extract($_SESSION['user']);
            }else{
                $thongbao="Tài khoản không tồn tại";
            }
        }


        // $response = array(); // Sẽ chứa dữ liệu phản hồi cho API

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     // Xử lý yêu cầu POST
        //     if (isset($_POST['user']) && isset($_POST['pass'])) {
        //         $user = $_POST['user'];
        //         $pass = $_POST['pass'];
        
        //         $checkuser = checkuser($user, $pass);
        
        //         if (is_array($checkuser)) {
        //             $_SESSION['user'] = $checkuser;
        //             $response['status'] = 'success';
        //             $response['message'] = 'Đăng nhập thành công!';
        //             $response['user'] = $_SESSION['user'];
        //         } else {
        //             $response['status'] = 'error';
        //             $response['message'] = 'Tài khoản không tồn tại';
        //         }
        //     } else {
        //         $response['status'] = 'error';
        //         $response['message'] = 'Thiếu thông tin đăng nhập';
        //     }
        
        //     // Trả về dữ liệu JSON
        //     header('Content-Type: application/json');
        //     echo json_encode($response);
        //     exit;
        // }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style type="text/css">
    body {
            margin: 0;
            padding: 0;
            background-color:#17a2b8;
            height: 100vh;
        }
    #login{
        padding:30px 400px 400px 400px;
    }
    .container{

        width: 100%;
        height: 300px;
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
                <h3 class="text-center">Login</h3>
                    <div class="form-group">
                        <label for="username" class="text-info">Username:</label><br>
                        <input type="text" name="user" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="password" name="pass" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="dangnhap" class="btn-info" value="Submit">
                        <a href="dangky.php" class="btn-move">Sign up</a>
                    </div>
            </form>            
        </div>
    </div>
</body>
</html>
