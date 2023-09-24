<?php
try {
  include './includes/db.php';

  // Insert into tasks task and is_completed 
  $query = "INSERT INTO tasks (task, is_completed) VALUES (:task, :is_completed)";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':task', $_POST['task']);
  $stmt->bindParam(':is_completed', $_POST['is_completed']);
  $stmt->execute();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

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
      </tr>
      <?php
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr><td>';
          echo htmlspecialchars($row['task']);
          echo '</td><td>';
          if ($row['is_completed'] == 1) {
            echo '<strong>Yes</strong>';
          } else {
            echo 'No';
          }

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
<div id="dump"></div>
<?php
include 'task_add.php';
