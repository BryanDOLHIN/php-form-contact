<!DOCTYPE html>
<HTML>
<head>
    <title>Formulaire</title>
    <style>
        body{   margin-left:1%;
                background:lightgray;}
        .error{color:red;}
        .star~label::before {   content: '\2606';
                                font-size : 30px;
                                color : gray; }
        .star:checked~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }
        .star:hover~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }                                
        .star {display : none;}
        .star1~label::before {   content: '\2606';
                                font-size : 30px;
                                color : gray; }
        .star1:checked~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }
        .star1:hover~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }                                
        .star1 {display : none;}
        .star2~label::before {   content: '\2606';
                                font-size : 30px;
                                color : gray; }
        .star2:checked~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }
        .star2:hover~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }                                
        .star2 {display : none;}
        .star3~label::before {   content: '\2606';
                                font-size : 30px;
                                color : gray; }
        .star3:checked~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }
        .star3:hover~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }                                
        .star3 {display : none;}
        .star4~label::before {   content: '\2606';
                                font-size : 30px;
                                color : gray; }
        .star4:checked~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }
        .star4:hover~label::before {   content: '\2605';
                                font-size : 30px;
                                color : gold; }                                
        .star4 {display : none;}
        .rating {   display: flex;
                    flex-direction: row-reverse;
                    width : 30px;
                    margin : 0px;}
        .rating1 {   display: flex;
                    flex-direction: row-reverse;
                    width : 30px;
                    margin : 0px;}
        .rating2 {   display: flex;
                    flex-direction: row-reverse;
                    width : 30px;
                    margin : 0px;}
        .rating3 {   display: flex;
                    flex-direction: row-reverse;
                    width : 30px;
                    margin : 0px;}
        .rating4 {   display: flex;
                    flex-direction: row-reverse;
                    width : 30px;
                    margin : 0px;}
    </style>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="resultat.php">
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
    $nameErr = $emailErr = $genderErr = $websiteErr = $navigationErr = "";
    $name = $email = $gender = $comment = $website = $navigation = $navigation1= $navigation2= $navigation3= $navigation4 = "";
    
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
        if (empty($_POST['navigation']))
        {$navigationErr = " Au moins une étoile est requise" ;}
        else {$navigation = test_input($_POST["navigation"]);}
        if (empty($_POST['navigation1']))
        {$navigationErr = " Au moins une étoile est requise" ;}
        else {$navigation1 = test_input($_POST["navigation1"]);}
        if (empty($_POST['navigation2']))
        {$navigationErr = " Au moins une étoile est requise" ;}
        else {$navigation2 = test_input($_POST["navigation2"]);}
        if (empty($_POST['navigation3']))
        {$navigationErr = " Au moins une étoile est requise" ;}
        else {$navigation3 = test_input($_POST["navigation3"]);}
        if (empty($_POST['navigation4']))
        {$navigationErr = " Au moins une étoile est requise" ;}
        else {$navigation4 = test_input($_POST["navigation4"]);}
    }
    ?>
    
    <form method="POST" action="<?php print(htmlspecialchars($_SERVER["PHP_SELF"]));?>">
        <fieldset><legend>Coordonnées</legend>
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
        </fieldset>
        
        <fieldset class="rating"><legend>Pédagogie du formateur</legend>
                    <input for="navigation5" class="star" type="radio" name="navigation" id="navigation5" value="5">
                    <label for="navigation5"></label>
                    <input for="navigation4" class="star" type="radio" name="navigation" id="navigation4" value="4">
                    <label for="navigation4"></label>
                    <input for="navigation3" class="star" type="radio" name="navigation" id="navigation3" value="3">
                    <label for="navigation3"></label>
                    <input for="navigation2" class="star" type="radio" name="navigation" id="navigation2" value="2">
                    <label for="navigation2"></label>
                    <input for="navigation1" class="star" type="radio" name="navigation" id="navigation1" value="1">
                    <label for="navigation1"></label><br><br>
        </fieldset>
        <fieldset class="rating1"><legend>Ambiance</legend>
                    <input for="navigation51" class="star1" type="radio" name="navigation1" id="navigation51" value="5">
                    <label for="navigation51"></label>
                    <input for="navigation41" class="star1" type="radio" name="navigation1" id="navigation41" value="4">
                    <label for="navigation41"></label>
                    <input for="navigation31" class="star1" type="radio" name="navigation1" id="navigation31" value="3">
                    <label for="navigation31"></label>
                    <input for="navigation21" class="star1" type="radio" name="navigation1" id="navigation21" value="2">
                    <label for="navigation21"></label>
                    <input for="navigation11" class="star1" type="radio" name="navigation1" id="navigation11" value="1">
                    <label for="navigation11"></label><br><br>
        </fieldset>
        <fieldset class="rating2"><legend>Accueil</legend>
                    <input for="navigation52" class="star2" type="radio" name="navigation2" id="navigation52" value="5">
                    <label for="navigation52"></label>
                    <input for="navigation42" class="star2" type="radio" name="navigation2" id="navigation42" value="4">
                    <label for="navigation42"></label>
                    <input for="navigation32" class="star2" type="radio" name="navigation2" id="navigation32" value="3">
                    <label for="navigation32"></label>
                    <input for="navigation22" class="star2" type="radio" name="navigation2" id="navigation22" value="2">
                    <label for="navigation22"></label>
                    <input for="navigation12" class="star2" type="radio" name="navigation2" id="navigation12" value="1">
                    <label for="navigation12"></label><br><br>
        </fieldset>
        <fieldset class="rating3"><legend>Conditions</legend>
                    <input for="navigation53" class="star3" type="radio" name="navigation3" id="navigation53" value="5">
                    <label for="navigation53"></label>
                    <input for="navigation43" class="star3" type="radio" name="navigation3" id="navigation43" value="4">
                    <label for="navigation43"></label>
                    <input for="navigation33" class="star3" type="radio" name="navigation3" id="navigation33" value="3">
                    <label for="navigation33"></label>
                    <input for="navigation23" class="star3" type="radio" name="navigation3" id="navigation23" value="2">
                    <label for="navigation23"></label>
                    <input for="navigation13" class="star3" type="radio" name="navigation3" id="navigation13" value="1">
                    <label for="navigation13"></label><br><br>
        </fieldset>
        <fieldset class="rating4"><legend>Supports utilisés</legend>
                    <input for="navigation54" class="star4" type="radio" name="navigation4" id="navigation54" value="5">
                    <label for="navigation54"></label>
                    <input for="navigation44" class="star4" type="radio" name="navigation4" id="navigation44" value="4">
                    <label for="navigation44"></label>
                    <input for="navigation34" class="star4" type="radio" name="navigation4" id="navigation34" value="3">
                    <label for="navigation34"></label>
                    <input for="navigation24" class="star4" type="radio" name="navigation4" id="navigation24" value="2">
                    <label for="navigation24"></label>
                    <input for="navigation14" class="star4" type="radio" name="navigation4" id="navigation14" value="1">
                    <label for="navigation14"></label><br><br>
        </fieldset>
        <input type="submit" && type="reset" name="submit" value="Submit"><br><br>
    </form>
</form>
    <?php
    print ("name = ".$name.'<br>');
    print ("email = ".$email.'<br>');
    print ("website = ".$website.'<br>');
    print ("comment = ".$comment.'<br>');
    print ("gender = ".$gender.'<br>');
    print ("note Pédagogie = ".$navigation.'<br>');
    print ("note Ambiance = ".$navigation1.'<br>');
    print ("note Accueil = ".$navigation2.'<br>');
    print ("note Conditions = ".$navigation3.'<br>');
    print ("note Supports = ".$navigation4.'<br>');
    ?>

</body>
</HTML> 