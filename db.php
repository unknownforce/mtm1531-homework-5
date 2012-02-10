<?php

$user = 'root';

$pass = '';

$dsn = 'mysql:dbname=chan0260;host=localhost';

$db = new PDO($dsn, $user, $pass);

$db->exec('SET NAMES utf8');