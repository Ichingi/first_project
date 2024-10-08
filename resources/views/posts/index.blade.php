<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
    <ul class="list-group mt-3">
        @foreach($posts as $post)
            <a class="text-dark text-decoration-none" href="{{ route('posts.show', [$post['id']]) }}">
                <li class="list-group-item p-3.">
                    <span class="bg-primary p-2 text-white rounded-3 m-1">{{ $post['id'] }}</span>
                    {{ $post['title'] }}
                </li>
            </a>
        @endforeach
    </ul>
    <div class="mt-3">
        {{ $posts->links() }}
    </div>
</div>
</body>
</html>
