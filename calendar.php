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
        echo "<tr><td>" .
        $events[0] .
        "</td><td>" .
        $events[1] .
        "</td><td>" .
        $events[2] .
        "</td></tr>";

        // echo $events[0];
        // echo "<br>";
        // echo $events[1];
        // echo "<br>";
        // echo $events[2];
        // echo "<br>";
      }
      ?>
    </table>
    </div>
</div>

<?php include("inc/footer.php"); ?>
