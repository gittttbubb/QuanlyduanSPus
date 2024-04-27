<?php
    include "./view/taikhoan/tb.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/main.css">
    <link rel="stylesheet" href="view/css/base.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>TMsneaker</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>
<div class="app">
        <header class="header" style="height:120px">
            <div class="grid" id="app">
                <nav class="header_navbar">
                    <ul class="header_navbar-list">
                    <li class="header_navbar-item">Hotline: 19001888</li>
                    <li class="header_navbar-item"><a href="index.php">Trang chủ</a></li>
                    <li class="header_navbar-item"><a href="index.php?act=tintuc">Tin tức</a> </li>
                    </ul>
                    <ul class="header_navbar-list">
                        <?php
                        
                            if(isset($_SESSION['user'])){
                               
                              extract($_SESSION['user']);
                              
                        ?>
                            <div style="color:#fff; font-size: 16px;">
                                Xin chào <?=$user?>
                            </div>
                            <li class="header_navbar-item" style="margin-left:-2px"><a href="view/taikhoan/edit.php">Cập nhật tài khoản</a></li>
                            <li class="header_navbar-item" style="margin-left:-2px"><a href="index.php?act=addtocart">Giỏ hàng</a></li>
                            <li class="header_navbar-item" style="margin-left:-2px"><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                            <?php if($role==1){?>
                            <li class="header_navbar-item" style="margin-left:-2px"><a href="admin/index.php">Admin</a></li>
                            <?php }?>
                            <li class="header_navbar-item"><a href="index.php?act=thoat">Thoát</a></li>
                        <?php 
                            }else{
                        ?>
                            <li class="header_navbar-item" id="dangky"><a href="view/taikhoan/dangky.php">Đăng ký</a></li>
                            <li class="header_navbar-item" id="dangnhap"><a href="view/taikhoan/login.php">Đăng nhập</a></li>
                        <?php }?>
                    </ul>
                </nav>
                <div class="header-with-search">
                    <form action="index.php?act=sanpham" method="post" >
                        <div class="header-search">
                            <input type="search" name="kyw" class="header-search-input" placeholder="Nhập têm sản phẩm">
                            <input type="submit" name="timkiem" value="Search" style="border:2px solid; color:#fff; background-color: #4b4848;">
                            
                        </div>
                    </form>
                   
                </div>
            </div>
        </header>
        