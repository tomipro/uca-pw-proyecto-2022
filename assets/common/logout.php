<?php
session_start();
session_destroy();
header("Location: http://localhost/uca-pw-proyecto-2022/assets/common/login.php");
die();
?>