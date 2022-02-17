<?php
include "class.database.php";
global $conn;
$result=mysqli_query($conn,"SELECT * FROM abcdfs");
var_dump(mysqli_fetch_all($result));