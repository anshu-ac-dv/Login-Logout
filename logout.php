<?php 
session_start();
$_SESSION['user_name']=="";
unset($_SESSION["user_name"]);
session_destroy();

?>
<script language="javascript">
document.location="index.php";
</script>