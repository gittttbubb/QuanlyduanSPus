<?php
function loadall_taikhoan(){
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadone_taikhoan($id){
    $sql = "select *from taikhoan where id=".$id;
    $tk = pdo_query_one($sql);
    return $tk;
}
function delete_taikhoan($id){
    $sql = "delete from taikhoan where id=" .$id;
    pdo_execute($sql);
}
function update_taikhoan_ct($id,$user,$pass,$email,$address,$tel,$role){ 
    $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."', role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function insert_taikhoan($email,$user,$pass){
    $sql = "insert into taikhoan(email, user, pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql = "select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){ 
    $sql = "update taikhoan set user='".$user."', pass='".$pass."', email='".$email."', address='".$address."', tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
?>