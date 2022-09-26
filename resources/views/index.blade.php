<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo App - Todo List</title>

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
        <a href="/create" class="btn btn-success my-1">Add new task</a>
        {!! $todoTable !!}
      </div>
    </body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      "use strict";
      $(document).ready(function() {
      })
    </script>
</html>