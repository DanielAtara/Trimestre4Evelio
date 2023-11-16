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
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            padding: 10px;
            background-color: #f8f8f8;
            background-image: linear-gradient(45deg, transparent 50%, #888 50%), linear-gradient(135deg, #888 50%, transparent 50%);
            background-position: calc(100% - 15px) calc(1em + 2px), calc(100% - 10px) calc(1em + 2px);
            background-size: 5px 5px, 5px 5px;
            background-repeat: no-repeat;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="{{route('update_users',['id'=>$users->id])}}" method="post">
        @method('PUT')
    @csrf
        <label for="doc_type">Document Type:</label>
        <select name="doc_type" id="doc_type" value="{{$users->doc_type}}">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
        </select>

        <label for="doc_num">Document Number:</label>
        <input type="text" name="doc_num" id="doc_num" value="{{$users->doc_num}}">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{$users->name}}">

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" value="{{$users->last_name}}">

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" value="{{$users->phone}}">

        <label for="user_name">Username:</label>
        <input type="text" name="user_name" id="user_name" value="{{$users->user_name}}">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{$users->email}}">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{$users->password}}">

       

        <select name="role_id" id="role_id" name="role_id" value="{{$users->role->role_name}}">
            @forelse ($roles as $role)
            <option value="{{$role->id}}">{{$role->role_name}}</option>
            @empty
            <option value="">no hay roles disponibles</option>
            @endforelse
        </select>

        <input type="submit">
        
    </form>
</body>
</html>