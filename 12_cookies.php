<?php
setcookie('name', 'john doe', time() +86400 * 30);
if(isset($_COOKIE['name']))
{
    echo'Welcome Back '.$_COOKIE['name'];
}
 ?>