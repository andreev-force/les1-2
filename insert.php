<?php
include_once 'config.php';
connect_DB();
$query = "INSERT INTO articles (title, content) VALUE ('Some title', 'Some text')";
$result = mysql_query($query);
if(!$result){
    die('������ ���� ������ ' . mysql_error());
}else{
    echo '���������� ����������� ������: ' . mysql_affected_rows();
}

?>