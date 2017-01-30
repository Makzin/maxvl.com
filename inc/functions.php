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
