<?php

$getMonth = $_GET['month'];

$monthResult = $mysqli->query("SELECT * FROM monthSummary");

$monthResultAll = [];
$monthPageAll = [];
$summaryAll = [];

while ($row = $monthResult->fetch_assoc()) {
    array_push($monthResultAll, $row);
}

        //<== Чет не работает ==>

// function mysqliParse($item, $arrResult)
// {
//     while ($row = $item->fetch_assoc()) {
//         array_push($arrResult, $row);
//     }
// }

// mysqliParse($monthResult, $monthResultAll);
// mysqliParse($monthPage, $monthPageAll);
        //<== Чет не работает ==>



if (!empty($getMonth)) {
    $monthPage = $mysqli->query("SELECT * FROM monthSummary WHERE month = $getMonth");
    while ($row = $monthPage->fetch_assoc()) {
        array_push($monthPageAll, $row);
    }
}

if (!empty($getMonth)) {
    $summary = $mysqli->query("SELECT * FROM summary WHERE month = $getMonth");
    while ($row = $summary->fetch_assoc()) {
        array_push($summaryAll, $row);
    }
}
