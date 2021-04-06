<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Buat akun Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="POST">
        @csrf
        <label>First name:</label> <br><br>
        <input type="text" name="first_name"> <br><br>
        <label>Last name:</label> <br><br>
        <input type="text" name="last_name"> <br><br>
        <label>Gender</label> <br><br>
        <input type="radio" name="gender" id="m"><label for="m"> Male</label> <br>
        <input type="radio" name="gender" id="f"><label for="f"> Female</label> <br>
        <input type="radio" name="gender" id="o"><label for="o"> Other</label> <br><br>
        <label for="nat">Nationality:</label> <br><br>
        <select name="nation" id="nat"> 
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select> <br><br>
        <label>Language Spoken:</label> <br><br>
        <input type="radio" name="lang" id="indo"><label for="indo"> Bahasa Indonesia</label> <br>
        <input type="radio" name="lang" id="eng"><label for="eng"> English</label> <br>
        <input type="radio" name="lang" id="other"><label for="other"> Other</label> <br><br>
        <label for="bio">Bio:</label> <br><br>
        <textarea name="bio" id="bio" cols="40" rows="8"></textarea> <br><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>