<div>

<h1>users List</h1>
<!-- 
{{ 
    print_r($users)
 }} -->

 <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>

    @foreach ($users as $users)
    <tr>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->password}}</td>


    </tr>
    
    @endforeach
 </table>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie -->
</div>
