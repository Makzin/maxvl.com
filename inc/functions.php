<?php

function full_blog_array()
{
    include('connection.php');
    try {
        $results = $db->query("SELECT article_id, subject, content FROM articles");
    } catch (Exception $e) {
        echo "Unable to retrieve results";
        exit;
    }
    $catalog = $results->fetchAll();
    return $catalog;
}


function get_single_article($id)
{
    include('connection.php');
    try {
        $results = $db->prepare(
        "SELECT article_id, subject, content
        FROM articles
        WHERE articles.article_id = ?"
      );
        $results->bindParam(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Could not fetch article";
        exit;
    }
    $item = $results->fetch();
    return $item;
}
