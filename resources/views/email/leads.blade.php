<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        header {
            background-color: #f23a2e;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .content strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Ichidai Lead Inzending</h1>
    </header>
    <div class="content">
        <p><strong>Naam:</strong> {{ $data['fullname'] }}</p>
        <p><strong>E-mail:</strong> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
        <p><strong>Telefoon:</strong> <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></p>
        @if ($data['referral'])
            <p><strong>Hoe heb je van ons gehoord?</strong> {{ $data['referral'] }}</p>
        @endif
    </div>
</div>
</body>
</html>
