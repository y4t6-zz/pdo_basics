<?php
try {
    require_once 'pdo_connect.php';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT name, meaningd, gender FROM names
            ORDER BY name';
    $result = $db->query($sql);
    $errorInfo = $db->errorInfo();
    if(isset($errorInfo[2])) {
        $error = $errorInfo[2];
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Error Messages</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>PDO: Getting Error Messages</h1>
<?php if (isset($error)) {
    echo "<div class='custom-error'><div>" . $error . "</div><div></div></div>";
} else { ?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php while ($row = $result->fetch()) { ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['meaning']; ?></td>
        <td><?php echo $row['gender']; ?></td>
    </tr>
    <?php } ?>
</table>
    <?php } ?>
</body>
</html>