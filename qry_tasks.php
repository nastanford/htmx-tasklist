<?php
try {
  include './includes/db.php';

  // Prepare and execute a SELECT query
  $query = "SELECT * FROM tasks";
  $stmt = $pdo->query($query);

  // Close the database connection
  // $pdo = null;
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
