<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
   <?php
        $name=$_POST['name'];
        echo $name;
<<<<<<< HEAD
=======
	echo "Test";
        echo "Hello  $name";

>>>>>>> 724312e4d6fe96b30d5950bcad0a0ef5b89a1b2e
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
        </body>
</html>
