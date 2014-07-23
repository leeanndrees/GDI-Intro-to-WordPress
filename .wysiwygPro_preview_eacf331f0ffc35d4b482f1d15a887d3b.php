<?php
if ($_GET['randomId'] != "57yy16jhBAHwF1dYFnEevaBVeXvK2C1UVE0w8uYL6dc537cYz0VuL2LkRBykag9D") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
