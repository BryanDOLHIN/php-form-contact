<!DOCTYPE html>
<HTML>
<head>
    <title>Formulaire</title>
    <style>
        body{   margin-left:1%;
                background:lightgrey;}
        .error{
                color:red;
        }
    </style>
</head>
<body>
    <h1>Formulaire</h1>
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
    //Define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr ="";
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST['name'])) 
        { $nameErr = " Name is required" ;}
        else {$name = test_input($_POST["name"]);
        if (!preg_match('/^[a-zA-Z \p{L}]+$/ui', $name)) {
            $nameErr = " Only letters and white space allowed";
        }}
        if (empty($_POST['email'])) 
        { $emailErr = " Email is required" ;}
        else {$email = test_input($_POST["email"]);
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = " Invalid email format";
        }}
        if (empty($_POST['website'])) 
        { $websiteErr = "" ;}
        else {$website = test_input($_POST["website"]);
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = " Invalid URL";
        }}
        if (empty($_POST['comment'])) 
        { $commentErr = "" ;}
        else {$comment = test_input($_POST["comment"]);}
        if (empty($_POST['gender'])) 
        { $genderErr = " Gender is required" ;}
        else {$gender = test_input($_POST["gender"]);}
    }
    ?>
    <form method="POST" action="<?php print(htmlspecialchars($_SERVER["PHP_SELF"]));?>">
        Name :      <input type="text" name="name" value="<?php print($name);?>">
                    <span class="error">*<?php echo $nameErr;?></span><br><br>
        E-mail :    <input type="text" name="email" value="<?php print($email);?>">
                    <span class="error">*<?php echo $emailErr;?></span><br><br>
        Website :   <input type="text" name="website" value="<?php print($website);?>"><br><br>
        Comment :   <textarea name="comment" rows=5 cols=40 value="<?php print($comment);?>"></textarea><br><br>
        Gender :    <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") print("checked");?>> Female
                    <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") print("checked");?>> Male
                    <input type="radio" name="gender" value="Other" <?php if (isset($gender) && $gender == "Other") print("checked");?>> Other 
                    <span class="error">*<?php echo $genderErr;?></span><br><br>
                    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    
    print ("name = ".$name.'<br>');
    print ("email = ".$email.'<br>');
    print ("website = ".$website.'<br>');
    print ("comment = ".$comment.'<br>');
    print ("gender = ".$gender.'<br>');
    ?>
</body>
</HTML> 