<?php
    //session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="LoginSuccess.php" method="post">
            <label> Username: </label>
            <input typ="text" id="username" name="username"/>
            <br /><br />
            <label> Password: </label>
            <input type="password" id="password" name="password"/>
            <br /><br />
            <input type="submit" id='submit' name='submit'/>
        </form>
    </body>
</html>
