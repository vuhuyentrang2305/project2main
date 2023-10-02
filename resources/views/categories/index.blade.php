<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>
<a href="{{route('categories.create')}}">Add a Cate</a>
<table border="1px" cellpadding="0" cellspacing="0"width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>
                {{$category->id }}
            </td>
            <td>
                {{ $category->name }}
            </td>
            <td>
                <a href="{{route('categories.edit', $category)}}">Edit</a>
            </td>
            <td>
                <form action="{{route('categories.destroy', $category) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
</body>
</html>
