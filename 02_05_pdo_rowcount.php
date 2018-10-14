<?php
try {
    require_once 'pdo_connect.php';
/*
    // 1
    $count = $db->query('SELECT COUNT(*) FROM names');
    $numrows = $count->fetchColumn();
    // 1 end 
*/
    // 2
    $sql = 'SELECT name, meaning, gender FROM names ORDER BY name';
    $result = $db->query($sql);
    $numrows = $result->rowCount();
    // 2 end

} catch (Exception $e) {
    $error = $e->getMessage();
}

if (isset($error)) {
    echo $error;
}
?>

<pre>
<?php
echo 'Total results rows: ' . $numrows;
?>
<pre>

