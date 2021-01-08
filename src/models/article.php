<?php 

include_once "../app/model.php";

function getArticles()
{
    return findAll();
}

function getArticle($id)
{
    return find($id);
}

function addArticle($data)
{
    return insert($data);
}