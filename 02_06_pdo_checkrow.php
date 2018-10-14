<?php
try {
    require_once 'pdo_connect.php';
    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';
    $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}

// echo
$row = $result->fetch();
if (!row) {
    echo 'No results found!';
} else {
    do {
        echo $row['name'] . '<br>';
    } while($row = $result->fetch());
}




