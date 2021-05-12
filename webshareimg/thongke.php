<?php

    // PHP thuần
    $conn = new mysqli('localhost', 'root', '', 'image_manager');
    if ($conn->connect_errno) {
        die('can not connect database');
    }
    $postId = 'xxx';
    $conn->query('UPDATE table_posts SET views = views + 1 WHERE id = ' . $postId . ');
    
?>