<?php
function load_select_all($id)
{
  $sql = "select * from comment where id_product='$id'";
  return selectSQL($sql);
}
function bl_insert($name, $email, $mess, $idpro)
{
  $sql = "insert into comment (name, email, noidung, id_product) values ('$name', '$email', '$mess', '$idpro')";
  return addSQL($sql);
}
function getAllComment()
{
  $sql = "select * from comment";
  return selectSQL($sql);
}
function delComment($id)
{
  $sql = "delete from comment where id ='$id'";
  execSQL($sql, 0);
}
