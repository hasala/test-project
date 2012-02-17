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
	echo "Hello World"
=======
        echo "Hello  $name";
>>>>>>> 6defc05c0871be4bbaaef47689ab2b69a697d729
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
        </body>
</html>
