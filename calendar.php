<?php
include("inc/functions.php");
$calendar = full_calendar();

$pageTitle = "Event Calendar";

include("inc/header.php"); ?>

<div class="page-content">
  <h2>Event Calendar</h2>
    <div class="calendar">
      <table>
      <?php
      foreach($calendar as $events){
        $time = strtotime($events[0]);
        $date = date('M j, Y', $time);
        echo "<tr><td>" .
        $date .
        "</td><td>" .
        $events[1] .
        "</td><td>" .
        $events[2] .
        "</td></tr>";
      }
      ?>
    </table>
    </div>
</div>

<?php include("inc/footer.php"); ?>
