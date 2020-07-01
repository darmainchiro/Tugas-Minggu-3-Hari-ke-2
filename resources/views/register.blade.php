<html>
    <head>
        <title>Aji Guna</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method ="post">
            @csrf
            <label for="first_name">First name:</label><br><br>
            <input type="text" id="first_name" placeholder="First Name" name="first_name"/><br><br>
            <label for="last_name">Last name:</label><br><br>
            <input type="text" id="first_name" name="last_name" placeholder="Last Name"/><br><br>
            <label for="gender">Gender:</label><br><br>
            <input type="radio" name="gender" value="Male"/>Male<br>
            <input type="radio" name="gender" value="Female"/>Female<br>
            <input type="radio" name="gender" value="Other"/>Other<br><br>
            <label for="nationality">Nationality:</label><br><br>
            <select id="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
            </select><br><br>
            <label for="language">Language Spoken:</label><br><br>
            <input type="checkbox" name="language" value="Bahasa Indonesia"/>Bahasa Indonesia<br>
            <input type="checkbox" name="language" value="English"/>English<br>
            <input type="checkbox" name="language" value="Other"/>Other<br><br>
            <label for="bio">Bio:</label><br><br>
            <textarea name="bio"></textarea><br>
            <button type="submit">Sign Up</button><br>
        </form>       
    </body>
</html>