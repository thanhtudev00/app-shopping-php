<?php
function getTag($hot)
{
  $sql = "select * from tag where 1";
  if ($hot == 1) { // muốn show home thì cho $home = 1
    $sql .= " AND hot=1";
  }
  $sql .= " ORDER BY name";
  return selectSQL($sql);
}
function selectTagById($id)
{
  $sql = "select * from tag where id ='$id'";
  return select1SQL($sql);
}
function insertTag($name, $hot)
{
  $sql = "insert into tag (name,hot) values ('$name','$hot')";
  return addSQL($sql);
}
function updateTag($name, $hot, $id)
{
  $sql = "update tag set name='$name', hot='$hot' where id='$id'";
  return execSQL($sql, 1);
}
function delTag($id)
{
  $sql = "delete from tag where id ='$id'";
  execSQL($sql, 0);
}
