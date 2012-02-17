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
	// this file was edited locally;
=======
        echo "Hello  $name";
<<<<<<< HEAD
>>>>>>> 6defc05c0871be4bbaaef47689ab2b69a697d729
=======
        //this file has been edited on the web
>>>>>>> 20024dfa299e06a5a9c9ef27c1be95b3ebde7e18
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
        </body>
</html>
