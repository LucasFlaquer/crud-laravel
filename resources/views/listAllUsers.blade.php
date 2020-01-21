<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Listagem de Ususarios</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <td>#id</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
      </tr>
    </thead>
     <tbody>
      @foreach($users as $user) 
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            <a href="{{route('user.show', ['user'=>$user->id])}}">Ver Usuário</a>
            <form action="{{route('user.destroy',['user'=>$user->id])}}" method="POST">
              @csrf
              @method('delete')
              <input type="hidden" name="user" value="{{$user->id}}">
              <input type="submit" value="remover">
            </form> 
          </td>
        </tr>
        @endforeach
     </tbody>
  </table>
</body>
</html>