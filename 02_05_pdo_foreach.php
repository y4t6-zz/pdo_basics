<?php
try {
    require_once 'pdo_connect.php';
    $count = $db->query('SELECT COUNT(*) FROM names');
    $numrows = $count->fetchColumn();
    $sql = 'SELECT name, meaning, gender FROM names ORDER BY name';
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}
if($numrows) {
    foreach ($db->query($sql) as $row) {
        echo $row['name'] . '<br>';
    }
}


