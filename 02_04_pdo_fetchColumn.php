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
?>

<pre>
<?php
while($col = $result->fetchColumn(0)) {
    echo $col . '<br>';
}
?>
<pre>

