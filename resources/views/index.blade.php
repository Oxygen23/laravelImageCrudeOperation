<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <div class="container">
       <h1>image crude operation</h1>
       <a href="/create">add post</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Auth</th>
                    <th>description</th>
                    <th>cover</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                    
              
                <tr >
                    <th>{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->body}}</td>
                    <td><img src="cover/{{$post->cover}}" style="max-height:100px; max-width:100px " alt="" srcset=""></td>
                    <td><a href="/edit/{{$post->id}}">Update</a> </td>
                    <td>
                        <form action="/delete/{{$post->id}}" method="post">
                            <button type="submit" onclick=" return confirm('are sure?');">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>