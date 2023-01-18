<!DOCTYPE html>
<HTML>
<head>
    <title>Formulaire</title>
    <style>
        body{   margin-left:1%;
                background:pink;}
    </style>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="">
        Name :      <input type="text" name="name" required><br><br>
        E-mail :     <input type="email" name="email" required><br><br>
        Website :   <input type="text" name="website"><br><br>
        Comment :   <textarea name="comment" rows=5 cols=40></textarea><br><br>
        Gender :    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="Other"> Other <br><br>
                    <input type="submit">
        
    </form>
    <?php 
    //Define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (isset($_POST['name'])) 
    { $name = test_input($_POST['name']) ; 
        print ('name = '.$name). '<br>';}
    if (isset($_POST['email'])) 
    {$email = test_input($_POST['email']) ;
        print ('email = '.$email). '<br>';}
    if (isset($_POST['website'])) 
    {$website = test_input($_POST['website']) ; 
        print ('website = '.$website). '<br>';}
    if (isset($_POST['comment'])) 
    {$comment = test_input($_POST['comment']) ; 
        print ('comment = '.$comment). '<br>';}
    if (isset($_POST['gender'])) 
    {$gender = test_input($_POST['gender']) ; 
        print ('gender = '.$gender). '<br>';}
    ?>
</body>
</HTML> 