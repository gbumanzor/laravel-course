<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Enter your name" value="{{ old('name')  }}"><br>
    {{ $errors->first('name') }}<br>
    <input type="text" name="email" placeholder="Enter your email"  value="{{ old('email')  }}"><br>
    {{ $errors->first('email') }}<br>
    <input type="text" name="subject" placeholder="Subject"  value="{{ old('subject')  }}"><br>
    {{ $errors->first('subject') }} <br>
    <textarea name="message" id="" cols="30" rows="10" placeholder="Message">{{ old('message')  }}</textarea><br>
    {{ $errors->first('message') }} <br>
    <button>Submit</button>
  </form>

</body>
</html>
