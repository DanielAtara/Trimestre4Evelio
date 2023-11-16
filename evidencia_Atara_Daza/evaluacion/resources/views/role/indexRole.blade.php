<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles creados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
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
            display: block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            width: fit-content;
            margin: 20px auto;
            text-align: center;
        }

        .updateBtn {
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Roles creados</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre del rol</th>
            <th>Acción</th>
        </tr>
        @forelse($role as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->role_name}}</td>
            <td>
                <form action="{{route('edit_role',['role'=>$role->id])}}" method="get">
                    <button class="updateBtn">Actualizar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay roles</td>
        </tr>
        @endforelse
    </table>
    <a href="{{route('create_role')}}">Crear un nuevo rol</a>
</body>
</html>
