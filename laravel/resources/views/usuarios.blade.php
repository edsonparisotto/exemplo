<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td colspan=6><h1>Ver usuarios</h1></td>
        </tr>
@foreach($users as $user)
        <tr>
            <td><p>ID: {{ $user->id }}</p></td>
            <td><p>Nome: {{ $user->name }}</p></td>
            <td><p>Email: {{ $user->email }}</p></td>
            <td><p>Desde: {{ date('d/m/Y H:m', strtotime($user->created_at)) }}</p></td>
            <td><a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a></td>
            <td>
                <form action="{{ route('users.delete', ['user' => $user->id]) }}" method="post">
                    <input type="hidden" name="user" value="{{ $user->id }}">
                    <input type="submit" value="Excluir">
                    @csrf

                    @method('delete')

                </form>
            </td>
        <tr>
@endforeach
    </table>
</body>
</html>
