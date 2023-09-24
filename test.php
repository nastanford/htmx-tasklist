<?php
$pageTitle = "Test";
include 'qry_tasks.php';
?>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-12 text-center">
      <h1>
        <?= $pageTitle ?>
      </h1>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="col-4 offset-4">
    <table class="table">
      <tr>
        <th>Testing</th>
      </tr>
      <?php
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr><td>';
          echo htmlspecialchars($row['task']);
          echo '</td></tr>';
        }
      } else {
        echo '<tr><td>';
        echo "No tasks found.";
        echo '</td></tr>';
      }
      ?>
    </table>
  </div>
</div>