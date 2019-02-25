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
@foreach($errors->all() as $error)
    {{$error}}
@endforeach
<form method="post" action="{{ route('store') }}">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content">
    <input type="date" name="due_date" placeholder="due">
    <input type="submit" value="Add">
</form>
</body>
</html>