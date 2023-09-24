<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div hx-select=".my-form">
        <form method="post"
          action="/myTasks/test.php"
          class="my-form"
          hx-boost="true"
          hx-target="this"
          hx-swap="outerHTML"
          hx-trigger="change">
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
              <input type="submit"
                class="btn btn-sm btn-primary ms-2"
                id="addTask"
                name="AddTask"
                value=" + Add Task" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>