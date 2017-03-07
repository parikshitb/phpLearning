<?php

session_start();

$error=FALSE;
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])) 
{
    $_SESSION['post']=$_POST;
    if (empty($_POST['username']))
    {
        $_SESSION['error']['usernameMessage'] = 'Username empty.';
        $error = TRUE;
    }        
    if (empty($_POST['password']))
    {
        $_SESSION['error']['passwordMessage'] = "Password empty.";
        $error = TRUE;
    }    
    elseif (strlen($_POST['password']) < 5)
    {
        $_SESSION['error']['passwordMessage'] = "Password too small";
        $error = TRUE;
    }
    if ($error) {
        header('Location: index.php');
    }
}
else
{
    header('Location: index.php');
}   
echo 'Login Successful.';
