<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is the first Page</p>

    <form action="{{ route('first') }}"  method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br><br>

        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>

        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
