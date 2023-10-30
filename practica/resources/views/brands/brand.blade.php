<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            max-width: 400px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 18px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="post" action="{{route('country.save')}}">
        @csrf
        <label for="code">Código:</label>
        <input type="text" id="code" placeholder="code" name="code">

        <label for="name">Nombre:</label>
        <input type="text" id="name" placeholder="name" name="name">

        <label for="country">País:</label>
        <select name="origin_country" id="country">
            @forelse ($paises as $pais)
            <option value="{{$pais->id}}">{{$pais->country_name}}</option>
            @empty
            <option value="">NO HAY PAISES PARA MOSTRAR</option>
            @endforelse
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>