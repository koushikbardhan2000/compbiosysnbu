<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error Occurred</title>
    <style>
        body {
            background-color: #fff1f1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .message-box {
            background: #fff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(255, 0, 0, 0.2);
            text-align: center;
        }
        .message-box h1 {
            color: #d32f2f;
        }
        .message-box p {
            font-size: 18px;
            margin-top: 10px;
        }
        .message-box a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #d32f2f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .message-box a:hover {
            background-color: #a62828;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Oops!</h1>
        <p>Something went wrong while submitting your message.</p>
        <a href="contact.html">Try Again</a>
    </div>
</body>
</html>
