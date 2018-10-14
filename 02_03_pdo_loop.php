<?php
try {
    require_once 'pdo_connect.php';
    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}

foreach ($db->query($sql) as $row) {
    echo $row['name'];
}

