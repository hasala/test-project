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

        echo "Hello  $name";

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
        </body>
</html>
