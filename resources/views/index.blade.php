<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="/thanks" method="post">
    @csrf
    {{$content}}<br>
    <input type="text" name="name"><br>
    {{$email}}<br>
    <input type="text" name="email"><br>
    <button type="submit">{{$button}}</button>
  </form>
</body>
</html>