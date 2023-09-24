<?php
$pageTitle = "Example 1";
include './includes/header.php';
?>

<button hx-post="/api/login.php"
  hx-trigger="click"
  hx-target="#test"
  hx-swap="outerHTML">
  Click Me!
</button>

<div id="test"></div>

<div id="mainContent"></div>
<?php
include './includes/footer.php';