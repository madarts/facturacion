<?php


if(isset($_SESSION['fac_user']) AND isset($_SESSION['fac_user'])){
    echo '<link href="css/styleHome.css" rel="stylesheet" type="text/css" />';
}
else{
    echo '<link href="css/styleLogin.css" rel="stylesheet" type="text/css" />';
}

?>