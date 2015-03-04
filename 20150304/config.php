<?php
$config['host'] = 'localhost';
$config['database'] = 'member';
$config['user'] = 'root';
$config['password'] = '';

$con = mysql_connect($config['host'],$config['user'],$config['password']);
mysql_select_db($config['database']);
