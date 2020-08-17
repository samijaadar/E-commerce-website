<?php
session_start();
if (isset($_SESSION['email']))
{
unset($_SESSION['email']);
session_destroy();
}?>
<meta http-equiv="Refresh" content="0; url=login.php" />
