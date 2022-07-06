<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List User</title>
</head>
<body class="antialiased">
    <div class=".container-md" style="margin: 50px 10% ;">
        <h1>List User</h1>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0; $i < count($users); $i++)
                    <tr>
                        <th scope='row'>{{($i+1)}}</th>
                        <td>{{$users[$i]->name}}</td>
                        <td>{{$users[$i]->email}}</td>
                        <td>
                            <a href="/Laravel-Practice/public/deleteUser/{{$users[$i]->id}}" class='btn btn-danger'>Delete</a>
                            <a href="/Laravel-Practice/public/editUser/{{$users[$i]->id}}" class='btn btn-primary'>Edit</a>
                        </td>
                    </tr>
                @endfor
                </tr>
            </tbody>
        </table>
        <a href="/Laravel-Practice/public/createUser" class="btn btn-primary">Add User</a>
    </div>
    
</body>
</html>