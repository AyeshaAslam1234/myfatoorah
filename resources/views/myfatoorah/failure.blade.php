<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #fff8f8;
            color: #c62828;
            margin-top: 100px;
        }
        .container {
            display: inline-block;
            padding: 30px;
            border: 2px solid #ffcdd2;
            border-radius: 12px;
            background-color: #ffebee;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #c62828;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #8e0000;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('message'))
            <p>{{ session('message') }}</p>
        @endif

        <h1>❌ Payment Failed!</h1>
        <p>Sorry, your payment could not be processed. Please try again.</p>
        <a href="{{ url('/') }}" class="btn">Try Again</a>
    </div>
</body>
</html>
