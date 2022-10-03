<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Create a post</title>
</head>
<body>
    <a href="{{ route('post.index') }}">Go to index page</a>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        Title : <input type="text" name = "title"><br>
        Content: <textarea name="content" cols="30" rows="10"></textarea>
        <button type="submit">Save post</button>
    </form>
</body>
</html>

