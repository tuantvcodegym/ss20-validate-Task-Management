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
<table border="1px" cellspacing="0">
    <tr>
        <td>Title</td>
        <td>Conten</td>
        <td>Due_date</td>
        <td>created_at</td>
        <td>updated_at</td>
    </tr>
    @foreach($tasks as $key=>$value)
        <tr>
            <td>{{$value->title}}</td>
            <td>{{$value->content}}</td>
            <td>{{$value->due_date}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
        </tr>
    @endforeach
</table>
<a href="{{route('create')}}">Insert</a>
</body>
</html>