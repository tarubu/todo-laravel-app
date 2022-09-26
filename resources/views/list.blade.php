<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      <th scope="col">Description</th>
      <th scope="col">Due Date</th>
      <th scope="col">Status</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
  @foreach($todoList as $key => $task)
    <tr>
      <th scope="row">{{ $key+1 }}</th>
      <td>{{ $task["title"] }}</td>
      <td>{{ $task["description"] }}</td>
      <td>{{ $task["due_date"] }}</td>
      <td>{{ $task["status"] }}</td>
      <td><a href="#" class="btn btn-success mx-1">Complete</a><a href="/edit/{{ $task['id'] }}" class="btn btn-warning mx-1">Edit</a><a href="/info/{{ $task['id'] }}" class="btn btn-danger mx-1 deleteBtn">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>