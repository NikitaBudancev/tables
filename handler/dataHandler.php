<?php

$data = $_POST['data'];
$name = $data['name'];
$month = $data['month'];
$value = $data['value'];

if ($name == 0) $name = 'anton';
if ($name == 1) $name = 'roma';
if ($name == 2) $name = 'denis';
if ($name == 3) $name = 'zhenya'; 
if ($name == 4) $name = 'nikita';
$data['name'] = $name;

$mysqli->query("UPDATE total SET $name=$value WHERE month=$month");
$mysqli->query("UPDATE total SET totalLine = nikita + denis + anton + roma + zhenya");
$result = $mysqli->query("SELECT * FROM total");

$resultAll = [];

while ($row = $result->fetch_assoc()) {
    array_push($resultAll, $row);
}
