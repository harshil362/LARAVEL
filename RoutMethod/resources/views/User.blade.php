<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie -->

<H1>User form</H1>

        <form action="/user" method="post">
            <input type="hidden" name="_method" value="put">
            @csrf
            <input type="text" name="user" placeholder="Enter Name">
            <br>
            <br>
            <input type="password" name="password" placeholder="Enter Password">
            <br>
            <br>
            <button>Submitt</button>
        </form>
</div>
