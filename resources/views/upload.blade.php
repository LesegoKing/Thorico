<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload</h1>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit" name="upload">
    </form>
</body>
</html>