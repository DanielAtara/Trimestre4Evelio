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
    <form method="post" action="{{route('register_products')}}">
        @csrf
        <label for="code">CODE:</label>
        <input type="text" id="code" placeholder="code" name="code">
        <label for="">categorias</label>
        <select name="categorie_id" id="">
            @forelse($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @empty
            <option value="">no hay categorias disponibles</option>
            @endforelse
        </select>
        <label for="">brands</label>
        <select name="brand_id" id="">
            @forelse($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
            @empty
            <option value="">no hay marcas disponibles</option>
            @endforelse
        </select>

        <label for="description">DESCRIPTION:</label>
        <input type="text" id="description" placeholder="Description" name="description">

        <label for="unit_measurement">UNIT MEASUREMENT:</label>
        <select name="unit_measurement" id="unit_measurement">
            <option value="UNIT">UNIT</option>
            <option value="other">OTHER</option>
        </select>

        <label for="avaliable">AVALIABLE:</label>
        <input type="text" id="avaliable" placeholder="Avaliable" name="avaliable">

        <label for="percentaje_vat">PERCENTAJE VAT:</label>
        <input type="text" id="percentaje_vat" placeholder="Percentaje VAT" name="percentage_vat">

        <label for="unit_price">UNIT PRICE:</label>
        <input type="text" id="unit_price" placeholder="Unit Price" name="unit_price">

        <label for="stock">STOCK:</label>
        <input type="text" id="stock" placeholder="Stock" name="stock">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>