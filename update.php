<?php
include_once 'config.php';
connect_DB();
$query = "UPDATE articles SET title = 'Some title after update',
          content = 'Some content after update' WHERE id_article = 3";
$result = mysql_query($query);
if(!$result) die ('Ошибка базы данных:' . mysql_error());
?>