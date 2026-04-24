<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
     <h1>add new user</h1>

     <form action="adduser" method="post">
        @csrf
        <div>
            <h5>user skill</h5>
            <input type="checkbox" name="skill[]" value="php" id="php">
            <label for="php">PHP</label>

            
            <input type="checkbox" name="skill[]" value="java" id="java">
            <label for="java">JAVA</label>

            
            <input type="checkbox" name="skill[]" value="css" id="css">
            <label for="css">CSS</label>
        </div>

        <div>
            <h5>user Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>

            
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">FeMale</label>

        </div>

        <div>
            <h5>City</h5>
            <select name="city">
            <option value="junagadh">Junagadh</option>
            <option value="surat">surat</option>
            <option value="rajkot">Rajkot</option>
            </select>
        </div>

        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="100">
        </div>

        <button>Add new user</button>
     </form>
</div>
