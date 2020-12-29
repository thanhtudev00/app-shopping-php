<?php
function checkUser($user, $pass)
{
    $sql = "select * from user where username= '" . $user . "' and password= '" . $pass . "'";
    return select1SQL($sql);
}
function addUser($user, $pass, $role, $email)
{
    $sql = "insert into user (username, password, role, email) SELECT * FROM (SELECT '$user', '$pass', $role,'$email') AS tmp WHERE NOT EXISTS ( SELECT username FROM user WHERE username = '$user' )";
    return addSQL($sql);
}
function getUserById($id)
{
    $sql = "select * from user where id ='$id'";
    return select1SQL($sql);
}
function updateUser($pass, $id)
{
    $sql = "update user set password='$pass' where id='$id'";
    return execSQL($sql, 1);
}
function getAllUser()
{
    $sql = "select * from user";
    return selectSQL($sql);
}
function delUser($id)
{
    $sql = "delete from user where id ='$id'";
    execSQL($sql, 0);
}
function totalUser()
{
    $sql = "select count(id) from user";
    return select1SQL($sql);
}
