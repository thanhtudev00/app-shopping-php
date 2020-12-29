<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=requaco", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
function selectSQL($sql)
{
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function select1SQL($sql)
{
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function execSQL($sql, $chk)
{
    $conn = connect();
    if ($chk == 1) { // Update
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } else { // insert,delete
        $conn->exec($sql);
    }
}
function addSQL($sql)
{
    $conn = connect();
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function execc($sql){
    $conn = connect();
    $conn->exec($sql);
}

