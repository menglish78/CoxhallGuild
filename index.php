<?php
include("inc/functions.php");
$upcoming = next_event();

$pageTitle = "Coxhall Guild";

include("inc/header.php"); ?>
<div class="page-content">
    <div class="next-event">
      <!-- Display next upcoming event -->
      <h2>Our Next Event</h2>
      <?php
      foreach($upcoming as $our_next){
        $time = strtotime($our_next[0]);
        $date = date('M j, Y', $time);
        echo  "<h3>" . $date . "</h3>";
        // echo "<br>";
        echo "<h3>" . $our_next[1] . "</h3>";
        echo "<br>";
        echo "<p>" . $our_next[2] . "</p>";
      }
      ?>
    </div>
  </div>
</div>
<?php include("inc/footer.php"); ?>
