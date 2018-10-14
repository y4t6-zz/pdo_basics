<?php
try {
    require_once 'pdo_connect.php';
} catch (Exception $e) {
    $error = $e->getMessage();
}

if ($db) {
    echo 'success';
} elseif (isset($error)) {
    echo $error;
}

