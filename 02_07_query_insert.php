<?php
try {
    require_once 'pdo_connect.php';
    $sql = 'INSERT INTO names (name, meaning, gender)
            VALUES ("William", "resolute guardian", "boy")';
    $result = $db->query($sql);  
/*
    // 1
    var_dump($result);
    // 1 end 
*/
    // 2
    echo $result->queryString;
    // 2 end
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}

// echo





