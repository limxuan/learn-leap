<?php

session_start();
echo "hello";

$_SESSION["lecturer_id"] = 1;
header("Location: create-new-quiz.php");
exit;
