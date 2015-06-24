<?php
include_once 'config.php';
connect_DB();
$page = (isset($_GET['page']))?($_GET['page']):1;
$num = ($page-1) * 5;
$query = "SELECT * From articles LIMIT $num, 6";
$result = mysql_query($query);
if(!$result) die ('Ошибка базы данных: ' . mysql_error());
while($row = mysql_fetch_array($result)){
        echo $row['id_article'] . '<br/>';
        echo $row['title'] . '<br/>';
        echo $row['content'] . '<br/><hr>';
}
?>