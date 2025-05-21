<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>     
        @foreach ($usuarios as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                <td>
                    <a href="/eliminar/usuario/{{$user->id}}" target="_blank" rel="noopener noreferrer">
                    Eliminar
                    </a>
                </td>             
            </tr>            
        @endforeach
    </table>
</body>
</html>