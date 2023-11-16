<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        <input type="submit">
    </form>
</body>
</html>