<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method='post'>
        <input type="text" placeholder="numero1" name="numero1">
        <input type="text" placeholder="numero2" name="numero2">
        <select name="operacion" >
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select>
        <input type="submit" value="enviar" name='enviar'> 
        
    </form>
</body>
</html>