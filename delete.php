<?php
include_once 'config.php';
connect_DB();
$query = "DELETE FROM articles WHERE id_article = " . $_GET['id'];
$result = mysql_query($query);
if(!$result) die ('Ошибка базы данных:' . mysql_error());

?>