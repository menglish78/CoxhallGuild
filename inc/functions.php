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

// GET ITEM HTML FUNCTION WILL BE USED FOR DISPLAYING CALENDAR
// function get_item_html($id,$item) {
//     $output = "<li><a href='details.php?id="
//         . $id . "'><img src='"
//         . $item["img"] . "' alt='"
//         . $item["title"] . "' />"
//         . "<p>View Details</p>"
//         . "</a></li>";
//     return $output;
// }
