<!DOCTYPE html>
<html>

<head>
  <title><?php echo $pageTitle; ?></title>
</head>
<link href="/myTasks/css/bootstrap.css"
  rel="stylesheet">
<script type="text/javascript"
  src="node_modules/htmx.org/dist/htmx.js"
  defer></script>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-white"
        href="#">HTMX Examples</a>
      <button class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse"
        id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">
            <a class="btn btn-sm btn-secondary text-white"
              aria-current="page"
              hx-post="/htmx-tasklist//taskList.php"
              hx-trigger="click"
              hx-target="#mainContent">Task List</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>