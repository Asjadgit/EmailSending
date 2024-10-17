<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail with Attachment</title>
</head>
<body>
    <h1>New Message from {{ $req['name'] }}</h1>
    <p><strong>Email:</strong> {{ $req['email'] }}</p>
    <p><strong>Message:</strong> {{ $req['message'] }}</p>
</body>
</html>
