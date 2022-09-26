<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App - Add new task</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@200&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css'); }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css'); }}" >
    <style>
        body { font-family: 'IBM Plex Sans Thai', sans-serif; }
    </style>
  </head>
  <body class="antialiased">
    <div class="container">
      <form id="createTaskForm" action="#" method="post">
        <div class="form-group">
          <label for="title">Task title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter task title">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="dueDate">Due date</label>
          <input type="text" class="form-control" id="dueDate" aria-describedby="dueDateHelp" placeholder="Enter due date">
          <small id="dueDateHelp" class="form-text text-muted">Date format is YYYY-MM-DD eg. 2022-09-20</small>
        </div>
        <div class="form-group">
          <label for="title">Status</label>
          <select class="form-control" id="status">
            <option value="1">Done</option>
            <option value="0">Not yet</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger">Cancel</button>
      </form>
    </div>
  </body>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    "use strict";
    $(document).ready(function() {
      $('#createTaskForm').on('submit', function(e) {
        e.preventDefault();
        console.log($('#createTaskForm').find('#status').val())
        $.ajax({
          url:'/',
          type: "POST",
          data: {
            "_token": "{{ csrf_token() }}",
            title: $('#createTaskForm').find('#title').val(),
            description: $('#createTaskForm').find('#description').val(),
            due_date: $('#createTaskForm').find('#dueDate').val(),
            status: $('#createTaskForm').find('#status').val()
          },
          success:function(response){
            alert('Add new task completed.')
            window.location = "/"
          }
        })
      })
    })
  </script>
</html>