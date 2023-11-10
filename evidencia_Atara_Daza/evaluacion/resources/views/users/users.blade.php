<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
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
    <form action="{{ route('save_users') }}" method="POST">
        @csrf

        <h2>User Registration Form</h2>

        <label for="doc_type">Document Type:</label>
        <select name="doc_type" id="doc_type">
            <option value="CC">CC</option>
            <option value="TI">TI</option>
        </select>

        <label for="doc_num">Document Number:</label>
        <input type="text" name="doc_num" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="user_name">Username:</label>
        <input type="text" name="user_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <select name="role_id" id="">
            @forelse ($roles as $role)
            <option value="{{$role->id}}">{{$role->role_name}}</option>
            @empty
            <option value="">no hay roles disponibles</option>
            @endforelse
        </select>

        <button type="submit">Register</button>
    </form>
</body>
</html>