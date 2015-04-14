<?php
if(setcookie("username", "", time() - 3600))
    echo '<SCRIPT type=text/javascript>alert("loginout Ok!");location.href="login.htm";</script>';

