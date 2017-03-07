<?php
    
    session_start();
        if (isset($_SESSION['error']['usernameMessage'])) 
        {
            echo $_SESSION['error']['usernameMessage'];
        }
        elseif (isset($_SESSION['error']['passwordMessage'])) 
        {
            echo $_SESSION['error']['passwordMessage'];
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="LoginSuccess.php" method="post" name="">
            <label> Username: </label>
            <input typ="text" id="username" name="username" value="<?php
                   if (isset($_SESSION['post']['username'])) {
                       echo $_SESSION['post']['username'];
                   }
        ?>"/>
            <br /><br />
            <label> Password: </label>
            <input type="password" id="password" name="password"/>
            <br /><br />
            <input type="submit" value='submit' name='submit'/>
        </form>
    </body>
</html>
<?php
if (isset($_SESSION['error'])) {
        session_unset($_SESSION['error']);
}
if (isset($_SESSION['post'])) {
        session_unset($_SESSION['post']);
}
