<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
</head>
<body>
<h1>Заголовок</h1>
<!-- Комментарий -->
@foreach($tasks as $task)
    <li><a href="tasks/{{$task->id}}">{{$task->body}}</a></li>
@endforeach
<p>Первый абзац.</p>
<p>Второй абзац.</p>
</body>
</html>