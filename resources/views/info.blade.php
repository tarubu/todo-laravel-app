<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App - Task Info</title>
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
      <form id="taskForm" action="#" method="post">
        <div class="form-group">
          <label for="title">Task title</label>
          <input type="hidden" id="id" value="{{ $task['id'] }}">
          {{ $task['title'] }}
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          {{ $task['description'] }}
        </div>
        <div class="form-group">
          <label for="dueDate">Due date</label>
          {{ $task['due_date'] }}"
        </div>
        <div class="form-group">
          <label for="title">Status</label>
          {{ ($task['status']==1)?'Done':'Not yet' }}
        </div>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </body>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    "use strict";
    $(document).ready(function() {

      $('#taskForm').on('submit', function(e) {
        e.preventDefault();
        if (confirm("Do you want to delete this task!") == true) {
          $.ajax({
            url:'/delete',
            type: "POST",
            data: {
              "_token": "{{ csrf_token() }}",
              id: $('#taskForm').find('#id').val()
            },
            success:function(response){
              alert('Delete task completed.')
              window.location = "/"
            }
          })
        }
      })
    })
  </script>
</html>