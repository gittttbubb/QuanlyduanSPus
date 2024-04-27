<?php
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/cart.php";   
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    if((isset($_GET['act'])) && ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_danhmuc($iddm);
                include "view/sanpham.php";
                break;
            case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php"; 
                }
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1); 
                    
                }
                else{
                    $_SESSION['mycart']=[];
                }
                
                header('Location: index.php?act=viewcart');
                break;
            case 'viewcart':
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                include "view/cart/bill.php";
                break;
            case 'billconfirm':
                if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
                    if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
                    else $id=0;
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $pttt=$_POST['pttt'];
                    $ngaydathang=date('h:i:sa d/m/Y');
                    $tongdonhang = tongdonhang();
                    $idbill=insert_bill($iduser,$user,$email,$address,$tel,$pttt, $ngaydathang, $tongdonhang);
                    //insert into cart: $session['mycart'] & idbill
                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }
                }

                $_SESSION['cart']=[];
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "view/cart/billcomfirm.php";
                break;
            case 'mybill':
                $listbill=loadall_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;
            case 'tintuc':
                include "view/tintuc/tintuc.php";
                break;
                case 'addpost':
                    include "view/tintuc/addpost.php";
                    break;
            default:
                include "view/home.php"; 
                break;
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
?>