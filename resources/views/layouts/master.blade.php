<!DOCTYPE html>
<html>
    <head>
        <title>Todolist</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>

    <h1>Your Todo List</h1>
    @if(session()->has('success'))
        <p>{{ session()->get('success') }}</p>
    @endif
        @yield('content')

    </body>
</html>
