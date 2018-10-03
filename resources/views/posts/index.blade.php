<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <body>
    @foreach ($posts as $post)
    <h1>{{ $posts->title}}</h1>
    @endforeach
    </body>
</html>
