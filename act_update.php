<?php
try {
  include './includes/db.php';

  // update is_completed 
  $query = "update tasks set is_completed = :is_completed";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':is_completed', $_POST['is_completed']);
  $stmt->execute();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

include 'taskList.php';
