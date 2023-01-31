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