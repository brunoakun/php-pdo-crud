<?php

/**
 * Clase para el manejo de datos
 */

require_once("db.php");

class datos
{

    function __construct()
    {
        $this->time = time();
    }


    /*******************************
     * getPostFetchData (id)
     * Devuleve datos de un post
     */
    function getPostFetchData($id)
    {
        global $pdo_conn;
        $q = "SELECT * FROM posts WHERE id=:id";
        $pdo_statement = $pdo_conn->prepare($q);
        $pdo_valores = [':id' => $id];
        $pdo_statement->execute($pdo_valores);
        $result = $pdo_statement->fetch();
        return ($result);
    }

    /*******************************
     * updatePost ([$valores])
     * Devuleve datos de un post
     */
    function updatePost($pdo_valores)
    {
        global $pdo_conn;
        $q = "UPDATE posts SET post_title=:post_title, description=:description, post_at=:post_at WHERE id=:id";
        $pdo_statement = $pdo_conn->prepare($q);
        $result = $pdo_statement->execute($pdo_valores);
        return ($result);
    }


    /*******************************
     * addPost ([$valores])
     * Devuleve datos de un post
     */
    function addPost($pdo_valores)
    {
        global $pdo_conn;
        $q = "INSERT INTO posts ( post_title, description, post_at ) VALUES ( :post_title, :description, :post_at )";
        $pdo_statement = $pdo_conn->prepare($q);
         $result = $pdo_statement->execute($pdo_valores);
        return ($result);
    }
}

$datos = new datos;
