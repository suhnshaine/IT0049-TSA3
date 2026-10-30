<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
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
        <h1>Profile</h1>

        <p>Username: {{ $user->username }}</p>
        <p>Full Name: {{ $user->full_name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>

</body>

</html>