<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destroy</title>
</head>
<body>
    <h1>VOY A BORRAR</h1>
    <form action="bike" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Confirm"/>
    </form>
</body>
</html>