<?php
//Дан массив с таблицами ('user', 'profile'),
//именами полей (id, name и так далее)
//и их типами: 1. $tables = array( 2. 'user'=>['id'=>'int', 'name'=>'varchar 256'],
//3. 'profile'=>['id'=>'int', 'value'=>'text'] 4. );
//Отобразите этот массив в базу данных
//(создайте в базе данных таблицы с заданными именами и полями).
$tables = array(
    'user' => ['id' => 'int', 'name' => 'varchar(256)'],
    'profile' => ['id' => 'int', 'value' => 'text']
);
$db = new SQLite3('database.db');
foreach ($tables as $tableName => $fields) {
    $query = "CREATE TABLE IF NOT EXISTS $tableName (";
    foreach ($fields as $fieldName => $fieldType) {
        $query .= "$fieldName $fieldType, ";
    }
    $query = rtrim($query, ', ');
    $query .= ")";
    $db->exec($query);
}

$db->close();