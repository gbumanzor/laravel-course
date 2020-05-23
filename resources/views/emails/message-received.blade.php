<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        Hello there,
        This is just an email to let you know you received a message from {{ $messageInfo['name'] }}

        Content:
        {{ $messageInfo['message'] }}
    </body>
</html>
