<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="submit3.php" method="post">
    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email">
<br>

<h2>Pohlaví</h2>
    <label for="gender-male">Muž </label>
    <input type="radio" name="gender" value="male" id="gender-male">
<br>
    <label for="gender-female">Žena</label>
    <input type="radio" name="gender" value="female" id="gender-female">
<br>

    <label for="gender-none">Nespecifikováno</label>
    <input type="radio" name="gender" value="none" id="gender-none">


<input type="submit" value="Odeslat">

</form>

</body>
</html>