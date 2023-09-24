<?php
try {
  include '../includes/db.php';

  // Insert into tasks task and is_completed 
  $query = "INSERT INTO tasks (task, is_completed) VALUES (:task, :is_completed)";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':task', $_POST['task']);
  $stmt->bindParam(':is_completed', $_POST['is_completed']);
  $stmt->execute();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
