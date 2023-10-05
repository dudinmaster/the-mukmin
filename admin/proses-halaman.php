<?php

$start = 0;

$rows_per_page = 4;

$records = $mysqli->query("SELECT * FROM komentar");
$nr_of_rows = $records->num_rows;

$pages = ceil($nr_of_rows / $rows_per_page);

include "../config.php";

if(isset($_GET['page-nr'])){
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows_per_page;
}

$result = $mysqli->query("SELECT * FROM komentar LIMIT $start, $rows_per_page");