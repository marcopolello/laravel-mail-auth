<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="Mail" action="index.html" method="post">
      <h1>hello world from {{Auth::user() -> name}}</h1>
      <h2>{{$esempio}}</h2>
    </form>

  </body>
</html>
