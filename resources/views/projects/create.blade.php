<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proyecto</title>
</head>
<body>
<h1>Nuevo Proyecto</h1>
<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <p>Titulo del Proyecto</p>
    <input name="title" type="text">
    <p>Descripcion del Proyecto</p>
    <textarea name="description" cols="30" rows="10"></textarea><br><br>
    <button>Save</button>
</form>
</body>
</html>
