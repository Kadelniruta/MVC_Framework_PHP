<?php
include 'Database.php';
include 'util.php';

$db = new Database();


$statement = $db-> query("SELECT * FROM note");
$notes = $statement->fetchAll();



$navTitle = "Note";
include 'views/notes.view.php';