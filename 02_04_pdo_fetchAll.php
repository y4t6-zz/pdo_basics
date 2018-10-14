<?php
try {
    require_once 'pdo_connect.php';
    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';
    $result = $db->query($sql);
    $all = $result->fetchAll();
    //$all = $result->fetchAll(PDO::FETCH_ASSOC);
    //$all = $result->fetchAll(PDO::FETCH_NUM);

} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}
?>

<pre>
<?php
print_r($all);
?>
<pre>

