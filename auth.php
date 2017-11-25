<?php
//Start session
session_start();
//Check whether the session variable SEES_MEMBER_ID is present or not
if(! issset($_SESSION['SESS_MEMBER_ID']) || (trim($_SEESION['SESS_MEMBER_ID']) == '' )) {
header("location: index.php");
exit();
}

?>
