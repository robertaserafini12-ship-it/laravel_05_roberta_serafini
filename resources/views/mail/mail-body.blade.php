<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <h1>Hai ricevuto un nuovo messaggio di contatto!</h1>
    
    <p><strong>Nome:</strong> {{ $userData['user'] }}</p>
    <p><strong>Email:</strong> {{ $userData['email'] }}</p>
    <p><strong>Messaggio:</strong></p>
    <p>{{ $userData['message'] }}</p>
</body>
</html>