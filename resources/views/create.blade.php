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
        <div></div>
        <div>
            <h3>add new post</h3>
            <div>
                <form method="POST" action="/post" enctype="multipart/form-data">
                
                    @csrf
                    <input type="text" name="title" placeholder="title">
                    <input type="text" name="author" placeholder="author">
                    <textarea name="body" cols="20" rows="4" placeholder="body"></textarea>
                    <label>cover image</label>
                    <input type="file" name="cover" placeholder="cover">
                    <label> image</label>
                    <input type="file" name="images[]" multiple placeholder="image">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
    
</body>
</html>