<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add User</title>
</head>
<body>
    <form action="/Laravel-Practice/public/storeUser" style="margin: 24px 33%" method="post">
        {{csrf_field()}}
        <h1>Add User</h1><br>
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="User Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="text" class="form-control" id="pass" name="pass" placeholder="Password">
        </div>
        <br>
        <input type='submit' class='btn btn-primary' value="Add">
    </form>
</body>
</html>