<?php
$pageTitle = "Task List";
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
        <th>Tasks</th>
        <th>Completed</th>
        <th>Manage</th>
      </tr>
      <?php
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr><td>' . $row['id'] . ' ';
          echo htmlspecialchars($row['task']);
          echo '</td><td>';
          if ($row['is_completed'] == 1) {
            echo '<button class="btn btn-sm btn-success fw-bold">Completed</button>';
          } else {
            echo '<button class="btn btn-sm btn-info fw-bold text-white">Complete</button>';
          }
          echo '</td><td>';
          echo '<button class="btn btn-sm btn-primary fw-bold">Delete</button>';
          echo '</td></tr>';
        }
      } else {
        echo '<tr><td colspan="3">';
        echo "No tasks found.";
        echo '</td></tr>';
      }
      ?>
    </table>
  </div>
</div>
<?php
include 'task_add.php';
