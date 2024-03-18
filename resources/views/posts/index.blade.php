<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>サンプル</title>
</head>

<body>
    <form action="{{ route('posts.index') }}" method="GET">
        <input type="text" name="keyword">
        <input type="submit" value="検索">
    </form>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>本文</th>
                <th>登録日</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($posts as $post) --}}
            <tr>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->body }}</td>
                <td>{{ $posts->created_at }}</td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>

</body>

</html>
