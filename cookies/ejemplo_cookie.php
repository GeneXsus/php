<?php
setcookie("cookie1","Mi regalito", time()+3600);
echo "esta es la galletita ", $_COOKIE['cookie1'];
?>