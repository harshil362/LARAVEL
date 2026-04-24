<div>
    <h1>List of all images </h1>
    @foreach ($imgData as $img )
    <img style="width: 200px; margin: 10px;" src="{{ url('storage/'.$img->path) }}" alt="">
    
    @endforeach
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
