<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>All Posts</title>
</head>
<body>
    <a href="{{ route('post.index') }}">Go to index page</a>
    <p>Post with ID={{$postId}}</p>
</body>
</html>

