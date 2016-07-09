<?php
include("inc/functions.php");
$calendar = full_calendar();

$pageTitle = "Event Calendar";

include("inc/header.php"); ?>

<div class="page-content">
  <h2>Event Calendar</h2>
    <div class="calendar">
      <?php
      foreach($calendar as $events){
        echo $events[0];
        echo "<br>";
        echo $events[1];
        echo "<br>";
        echo $events[2];
        echo "<br>";
      }
      ?>
    </div>
</div>

<?php include("inc/footer.php"); ?>
