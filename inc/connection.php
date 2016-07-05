<?php

//connects to database
try{
  $db = new PDO(
      'mysql:host=localhost;dbname=coxhall_events',
      'root',
      '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //if connection to database fails, message displayed and program ends
} catch (Exception $e) {
  echo "Unable to connect";
  echo $e->getMessage();
  exit;
}

//runs query against database, puts results in variable "$results"
try {
  $results = $db->query("SELECT date_time, event, description FROM events");
} catch (Exception $e) {
  echo "Unable to retrieve results";
  exit;
}

$calendar = $results->fetchALL();
