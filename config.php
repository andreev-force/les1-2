<?php
function connect_DB(){
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'lesson1-2';

//�������� ���������
    setlocale(LC_ALL, 'ru_RU.CP1251');

//����������� � ��
    mysql_connect($server, $username, $password) or die ('No connect to DB');
    //������������� ��������� �� ������� php ����� ��������� ���� �� �������
    mysql_query('SET NAMES cp1251');
    mysql_select_db($dbname) or die ('No table in DB');
}
?>