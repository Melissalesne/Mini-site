<?php 

function getCategories()
{
    global $db;

    $sql = "SELECT `id`, `name` FROM category";

    $q = $db->query($sql);

    return  $q->fetchAll(PDO::FETCH_OBJ);
}

function getCategory($id)
{
    global $db;

    if (null != $id)
    {
        $sql = "SELECT `id`, `name`, `description` FROM category WHERE `id`=:id";
    
        $q = $db->prepare($sql);
        $q->bindParam(":id", $id, PDO::PARAM_INT);
    
        $q->execute();
    
        return $q->fetch(PDO::FETCH_OBJ);
    }

    return false;
}


