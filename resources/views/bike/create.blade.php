<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <h1>VOY A CREAR</h1>
    <form action="{{ url('bike') }}" method="post">
        @csrf
        <input type="submit" value="Create"/>
    </form>
</body>
</html>