<?php
try {
    require_once 'pdo_connect.php';
    $sql = 'SELECT name, meaning, gender, id FROM names
            ORDER BY name';
    $result = $db->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}

while ($row = $result->fetch()) {
    echo $row['id'] . '. ' . $row[0] . ' - ' . $row['meaning'] . ' (' . $row['gender'] . ')<br>';
}

