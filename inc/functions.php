<?php
function full_calendar() {
  include("connection.php");
//runs query against database, puts results in variable "$results"
  try {
    $results = $db->query(
      "SELECT date_time, event, description
       FROM events
       WHERE date_time >= CURDATE()
       ORDER BY date_time ASC"
     );
  } catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
  }

  $calendar = $results->fetchALL();
  return $calendar;
}

//get only one upcoming date for main page
function next_event() {
  include("connection.php");
  try {
    $next_result = $db->query(
      "SELECT date_time, event, description
       FROM events
       WHERE date_time >= CURDATE()
       ORDER BY date_time ASC
       LIMIT 1"
     );
  } catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
  }

  $next = $next_result->fetchALL();
  return $next;
}
