<html>
    <head>
        <title>Coockie 2</title>
    </head>
    <body>
        <?php
        $name = $_POST['name'];
        $password = $_POST['password'];
        echo $name;
        echo $password;

        $ckname = "name";
        $ckvalue = $name;
        setcookie($ckname,$ckvalue);

       ?>
       <form action="./Topic9_Coockie3.php" method="post">
        <input type="submit" name="submit" value="submit_btn"> 
       </form>
    </body>
</html>