<div>
    <h1>Add User</h1>
{{ session('message') }}
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter useer name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter user email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter user phone">
        <br>
        <br>
        
        <button>Add new</button>
    

    </form>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
