<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../../scripts/databaseconnection.php';

$statementInsertRecipeDetails = $connection->prepare("SELECT * 
                                   FROM eventdetails e1, eventlocation e2 
                                   WHERE e1.category = e2.category AND e1.entryfee = e2.entryfee");
$statementInsertRecipeDetails->execute();
$events = $statementInsertRecipeDetails->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($events);