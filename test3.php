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
        echo "hello world welcome to smart git";
        $link =new mysqli("localhost","root","root","new_db");
        
        if(!isset($link))
        {
            mysqli_errno();
        }
        ?>
    </body>
</html>
