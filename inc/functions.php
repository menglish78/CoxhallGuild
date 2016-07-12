<?php
function full_calendar() {
  include("connection.php");
//runs query against database, puts results in variable "$results"
  try {
    $results = $db->query("SELECT date_time, event, description FROM events");
  } catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
  }

  $calendar = $results->fetchALL();
  return $calendar;
}
