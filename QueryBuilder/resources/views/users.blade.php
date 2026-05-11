<div>
    <h1>Users </h1>

    <table border="1">
        <tr>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        </tr>
        @foreach ( $users as $user)
        <tr>
      <tr>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->password}}</td>
        </tr>
    </tr>
        @endforeach
    </table>
    <!-- Well begun is half done. - Aristotle -->
</div>
