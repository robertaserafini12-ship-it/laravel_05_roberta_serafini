<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo Messaggio dal Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f4;
            padding: 40px 0;
        }
        .email-card {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
            margin-top: 0;
            font-size: 22px;
        }
        .message-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            color: #333333;
            margin-top: 10px;
            white-space: pre-wrap; /* Mantiene gli a capo scritti dall'utente nel textarea */
        }
        hr {
            border: none;
            border-top: 1px solid #dee2e6;
            margin: 20px 0;
        }
        p {
            color: #555555;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="email-wrapper">
        <div class="email-card">
            <h2 class="header">Hai ricevuto un nuovo messaggio dal tuo Blog! 📩</h2>
            
            <p><strong>Nome mittente:</strong> {{ $data['name'] }}</p>
            <p><strong>Email mittente:</strong> {{ $data['email'] }}</p>
            
            <hr>

            <h4 style="color: #333333; margin-bottom: 5px;">Messaggio:</h4>
            <div class="message-box">
                {{ $data['message'] }}
            </div>
        </div>
    </div>

</body>
</html>