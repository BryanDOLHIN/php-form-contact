<HTML>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="<?php print(htmlspecialchars($_SERVER["PHP_SELF"]))?>">
        Name :      <input type="text" name="name"><br><br>
        E-mail :     <input type="text" name="email"><br><br>
        Website :   <input type="text" name="email"><br><br>
        Comment :   <textarea name="email" rows=5 cols=40></textarea><br><br>
        Gender :    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="Other"> Other <br><br>
                    <input type="submit">
        
    </form>
</body>
</HTML> 