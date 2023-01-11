<HTML>
<body>
    <form method="POST" action="welcome_post.php">
        NAME : <input type="text" name="fname"><br>
        EMAIL : <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['fname'];
        if (empty($name))
        {
            print("Name is empty");
        }
        else
        {
            print($name);
        }
    }
    ?>

</body>




</HTML>