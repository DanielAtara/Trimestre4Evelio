<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="{{ route('save_candidate') }}" method="POST">
        @csrf

        <h2>Candidate Form</h2>

        <label for="selection_status">Selection Status:</label>
        <select name="selection_status" id="selection_status">
            <option value="EN ESTUDIO">En Estudio</option>
            <option value="SELECCIONADO">Seleccionado</option>
        </select>

        <label for="points">Points:</label>
        <input type="number" name="points" required>

        <label for="">USUARIOS</label>
        <select name="user_id" id="">
            @forelse($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @empty
            <option value="">no hay usuarios registrados</option>
            @endforelse
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>