<?php 

include_once "../app/model.php";

function getCategories()
{
    return findAll();
}

function getCategory($id)
{
    return find($id);
}

function addCategory($data)
{
    return insert($data);
}