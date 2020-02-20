<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <style>
        html {
            margin: 0 auto;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
            margin: 0 auto;
            font-family: sans-serif;
            padding: 40px;
        }

        .email-container {
            background-color: #dddddd;
            max-width: 600px;
            margin: auto;
        }

        .title {
            text-align: center;
            padding: 40px 0;
            font-size: 24px;
            background-color: #3960ee;
            color: #ffffff;
        }

        .inhoud {
            padding: 25px 50px 50px 50px;
            font-size: 15px;
            color: #555555;
        }

        th, td {
            text-align: left;
            width: 120px;
        }

        .logo {
            position: relative;
            top: 20px;
            float: right;
            width: 180px;
            margin-left: 20px;
            margin-bottom: 25px;
        }

        .footer {
            text-align: center;
            padding: 30px 0;
            font-size: 12px;
            background-color: #00e27F;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="email-container">
    @yield('content')
</div>
</body>
</html>
