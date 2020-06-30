<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <form action="/pregister" method="post">
        @csrf
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="welcome.html" >
            <label for="firstname">First Name :</label><br>
            <input type="text" name="firstname" id=""><br>
            <label for="lastname">Last Name :</label> <br>
            <input type="text" name="lastname" id="">
        
        <p>Gender :</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        
        <p>Nationality :</p>
        <select name="nationality" id="">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Australian">Australian</option>
        </select>
        
        <p>Languange Spoken :</p>
        <input type="checkbox" id="indonesia" name="language" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="female" name="language" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language" value="other">
        <label for="other">Other</label>
        
        <p>Bio :</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>