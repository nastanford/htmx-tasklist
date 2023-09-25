<?php
try {
  include './includes/db.php';

  // update is_completed 
  $query = "delete tasks id = :id";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':id', $_POST['id']);
  $stmt->execute();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

include 'taskList.php';
