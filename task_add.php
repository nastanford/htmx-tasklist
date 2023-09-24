<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div>
        <form method="POST"
          id="binaryForm"
          enctype="multipart/form-data"
          hx-swap="innerHTML"
          hx-target="#dump"
          hx-post="/htmx-tasklist/api/act_insertTask.php">
          <input type="hidden"
            name="is_completed"
            id="is_completed"
            value="0">
          <div class="row">
            <div class="col-8 offset-4">
              <input type="text"
                name="task"
                id="task"
                class="border-2 border-primary rounded"
                placeholder="Enter Task">
              <input type="button"
                class="btn btn-sm btn-primary ms-2"
                id="addTask"
                name="AddTask"
                value=" + Add Task"
                hx-trigger="click"
                hx-target="#dump"
                hx-post="/htmx-tasklist/api/act_insertTask.php" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>