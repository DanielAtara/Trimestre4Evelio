<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
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

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>candidatos creados</h1>
    <table>
        <tr>
            <th>Estado de selección</th>
            <th>Puntos</th>
        </tr>
        @forelse($candidates as $candidate)
        <tr>
            <td>{{$candidate->selection_status}}</td>
            <td>{{$candidate->points}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No hay usuarios</td>
        </tr>
        @endforelse
    </table>
    <a href="{{route('create_candidate')}}">crear un candidato</a>
    
</body>
</html>
