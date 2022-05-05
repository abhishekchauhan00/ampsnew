<?php
session_start();
 
unset($_SESSION['a']);
header('location: admin.php');


?>
<script language="javascript" type="text/javascript">
      window.history.forward();
      </script>