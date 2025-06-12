<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Create post</h1>
     <form action="/webprogramming/post/create" method="POST" class="sm-6 md-6" style="padding:12px 100px 12px 100px;margin-right:auto;margin-left:auto">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
            <label for="body">Text</label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>
        <div class="form-group" style="padding-top:20px;">
            <input type="submit" value="Save" class="btn btn-success">
           
        </div>
    </form>
</body>
</html>