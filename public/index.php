<?php

require_once(dirname(__FILE__, 2)) . '/src/config/database.php';

// testando banco
// Database::getConnection();

// testa select
$sql = 'SELECT * FROM users';
$result = Database::getResultFromQuery($sql);

while($row = $result->fetch_assoc()){
    print_r($row);
    echo '<br>';
}
