<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
    <form action="/Laravel-Practice/public/updateUser/{{$user->id}}" style="margin: 24px 33%" method="POST">
        {{csrf_field()}}
        <h1>Edit User</h1>
        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" class="form-control" id="username" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="text" class="form-control" id="pass" name="pass" value="{{$user->password}}">
        </div>
        <br>
        <input type='submit' class='btn btn-primary' value="Update">
    </form>
</body>
</html>