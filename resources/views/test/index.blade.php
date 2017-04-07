<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
@if($list)
    @foreach($list as $value)
        TITLE : {{ $value->title }}
        SUBTITLE : {{ $value->subtitle }}<br>
    @endforeach
@endif
{{ $list->render() }}

<form action="/index/getpost" method="post">
    <input type="text" name="name">
    <input type="text" name="name2">
    <textarea name="name3"></textarea>
    <input type="submit" value="submit">
</form>
</body>
</html>