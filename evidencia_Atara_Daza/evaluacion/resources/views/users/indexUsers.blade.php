
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
    </style>
</head>
<body>
    <h1>Usuarios creados</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Número de documento</th>
            <th>Email</th>
            <th>Rol</th>
        </tr>
        @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->doc_num}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->role_name}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No hay usuarios</td>
        </tr>
        @endforelse
    </table>
    <a href="{{route('create_users')}}">Crear un usuario</a>
    
</body>
</html>