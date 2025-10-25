<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f6fff8;
            color: #2e7d32;
            margin-top: 100px;
        }
        .container {
            display: inline-block;
            padding: 30px;
            border: 2px solid #c8e6c9;
            border-radius: 12px;
            background-color: #e8f5e9;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            background-color: #2e7d32;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('message'))
          <p>{{ session('message') }}</p>
        @endif

        <h1>✅ Payment Successful!</h1>
        <p>Thank you for your payment. Your transaction was completed successfully.</p>
        <a href="{{ url('/') }}" class="btn">Go to Home</a>
    </div>
</body>
</html>
