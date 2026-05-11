<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
     <h2>Add new user</h2>

     <!-- @if($errors->any())
     @foreach($errors->all() as $error)
     <div>
        {{$error }}
     </div>
     @endforeach
     @endif -->

     <form action="adduser" method="post">
        @csrf
        
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username" value="{{ old('username') }}"
            class="{{ $errors->first('username')?'input-error':'' }}">
            <span style="color: red;">@error('username'){{ $message }}@enderror</span>
        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="useremail"value="{{ old('useremail') }}"
            class="{{ $errors->first('useremail')?'input-error':'' }}">
            <span style="color: red;">@error('useremail'){{ $message }}@enderror</span>

        </div>

        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="usercity"value="{{ old('usercity') }}"
            class="{{ $errors->first('usercity')?'input-error':'' }}">
            <span style="color: red;">@error('usercity'){{ $message }}@enderror</span>
        </div>

            <div class="skill">
            <h5>user skill</h5>
            <input type="checkbox" name="skill" value="php" id="php" value="{{ old('skill') }}">
            <label for="php">PHP</label>

            
            <input type="checkbox" name="skill" value="java" id="java">
            <label for="java">JAVA</label>

            
            <input type="checkbox" name="skill" value="css" id="css"
            class="{{ $errors->first('skill')?'input-error':'' }}">
            
            <label for="css">CSS</label>
            
            <span style="color: red;">@error('skill'){{ $message }}@enderror</span>

        </div>

        <div>
            <button>Add New User</button>
        </div>
               
    </form>
</div>

<style>body{
    font-family: Arial, sans-serif;
}

h2{
    margin-bottom:15px;
}

.input-wrapper{
    margin-bottom:10px;
}

input[type="text"]{
    width:220px;
    padding:8px;
    border:1px solid #ccc;
    border-radius:4px;
}

.skill{
    margin-top:10px;
    padding:10px;
    border:1px solid #ccc;
    border-radius:5px;
    width:220px;
}

.skill h5{
    margin-bottom:8px;
}

.skill label{
    margin-right:10px;
}

button{
    margin-top:10px;
    padding:8px 15px;
    background-color:green;
    color:white;
    border:none;
    border-radius:4px;
    cursor:pointer;
}

button:hover{
    background-color:darkgreen;
}

.input-error{
    border: 1px solid red;
    color: red;
}
</style>
