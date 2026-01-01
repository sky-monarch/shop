<?php
$pdo = new PDO('pgsql:host=localhost;dbname=shop', 'sky','Marmakmr2.0');

$query = 'SELECT VERSION() AS version';
$ver = $pdo->query($query);
$version = $ver->fetch();
echo $version['version'];