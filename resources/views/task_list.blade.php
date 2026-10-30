<!DOCTYPE html>
<html>

<head>
    <title>All Tasks</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <h1>Tasks for Today Management System</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a>
    </nav>

    <div class="container">
        <h1>All Tasks</h1>

        <table border="1">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Due Date</th>
            </tr>

            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->task_date }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>