<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="Mail" action="index.html" method="post">
      <h1>hello world from {{Auth::user() -> name}}</h1>
      <h2 style="color: blue;"> {{$stringa}} </h2>

      <h1>{{$test}}</h1>
      <h1>{{$test2}}</h1>
    </form>

  </body>
</html>
