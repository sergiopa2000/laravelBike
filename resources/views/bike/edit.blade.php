<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
    <h1>VOY A EDITAR</h1>
    <form action="{{ url('bike/1') }}" method="post">
        @method('put')
        @csrf
        <input type="submit" value="Update"/>
    </form>
</body>
</html>