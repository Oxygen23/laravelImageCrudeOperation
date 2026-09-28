<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="margin-top: 50px;">
        <div>
            <p>cover</p>
            <form action="/deletecover/{{$posts->id}}" method="POST">
                <button type="submit">X</button>
                @csrf
                @method('delete')
            </form>
            <img src="/cover/{{$posts->cover}}" style="max-height:100px; max-width:100px ">
            <br>

          @if (count($posts->images)>0)
            <p>images</p>
           
            @foreach ($posts->images as $img )
              <form action="/deleteimage/{{$img->id}}" method="POST">
                <button type="submit">X</button>
                @csrf
                @method('delete')
            </form>
                
            
            <img src="/images/{{$img->image}}" style="max-height:100px; max-width:100px ">
            <br>
          @endforeach
              
          @endif
        </div>
        <div>
            <h3>update post</h3>
            <div>
                <form method="POST" action="/post/{{$posts->id}}" enctype="multipart/form-data">
                
                    @csrf
                    @method('put')
                    <input type="text" name="title" placeholder="title" value="{{$posts->title}}">
                    <br>
                    <input type="text" name="author" placeholder="author" value="{{$posts->author}}">
                    <br>

                    <Textarea name="body" cols="20" rows="4" placeholder="body">{{$posts->body}}</Textarea>
                    <br>
                    <label>cover</label><br>
                    <input type="file" name="cover" placeholder="cover"><br>
                    <label> image</label><br>
                    <input type="file" name="images[]" multiple placeholder="image"><br>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>