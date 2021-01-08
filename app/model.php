<?php

function getTableName()
{
    $callFnc = debug_backtrace()[3]['function'];
    $callFnc = explode("_", $callFnc);
    return $callFnc[0];
}

function findAll()
{
    global $db;

    $sql = "SELECT * FROM ".getTableName();

    $q = $db->query($sql);

    return  $q->fetchAll(PDO::FETCH_OBJ);
}

function find($id)
{
    global $db;

    if (null != $id)
    {
        $sql = "SELECT * FROM ".getTableName()." WHERE `id`=:id";
    
        $q = $db->prepare($sql);
        $q->bindParam(":id", $id, PDO::PARAM_INT);
    
        $q->execute();
    
        return $q->fetch(PDO::FETCH_OBJ);
    }

    return false;
}

function insert($data): bool
{
    global $db;

    $columns = "";
    $params = "";

    foreach ($data as $key => $value)
    {
        $columns .= !empty($columns) ? "," : null;
        $columns .= "`".$key."`";

        $params .= !empty($params) ? "," : null;
        $params .= ":".$key;
    }
    
    $sql = "INSERT INTO ".getTableName()." (".$columns.") VALUES (".$params.")";

    $q = $db->prepare($sql);

    foreach ($data as $key => $value)
    {
        $q->bindValue(':'.$key, $value, PDO::PARAM_STR);
    }

    return $q->execute();
}