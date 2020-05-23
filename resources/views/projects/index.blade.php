<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>
</head>
<body>
<h3><a href="{{ route('projects.create') }}">Crear Proyecto</a></h3>
<ul>
    @foreach($projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">{{ $project->title  }}</a> <br>
            <small>{{ $project->description  }} <br> {{ $project->created_at->diffForHumans() }}</small>
        </li>
    @endforeach
</ul>
<p>
    {{ $projects->links()  }}
</p>

</body>
</html>
