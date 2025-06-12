<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>صفحه ثبت نام</h1>
    <form action="/webprogramming/register" method="POST" class="sm-6 md-6" style="padding:12px 100px 12px 100px;margin-right:auto;margin-left:auto">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" name="name" id="name" class="form-control" placeholder="your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="your email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="your password">
        </div>
        <div class="form-group">
            <label for="password1">Retype Password</label>
            <input type="password" name="password1" id="password1" class="form-control" placeholder="your password">
        </div>
        <div class="form-group" style="padding-top:20px;">
            <input type="submit" value="Register" class="btn btn-success">
            <p>
                Have account! <a href="/webprogramming/login" class="btn btn-primary">Login</a>
            </p>
        </div>
    </form>
</body>
</html>