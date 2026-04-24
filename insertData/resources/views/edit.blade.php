<div>
    <h1>Update student</h1>

    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name">
        <br>
        <input type="text" name="email"  value="{{ $data->email }}" placeholder="Enter mail">
        <br>
        <input type="text" name="phone"  value="{{ $data->phone }}" placeholder="Enter phone">
        <br>
        <button>Update</button>
        <a href="/list">Cancel</a>


    </form>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie -->
</div>
