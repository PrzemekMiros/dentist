<?php
include("config.php");

(empty($_GET['page'])) ? $url = "main" : $url = $_GET['page'];

$file = "pages/".$url.".php";

$title = $page_name[$url];

include("modules/header.php");

if(file_exists($file)) {
    include($file);
}
else {
    include("modules/error.php");
}


include("modules/footer.php");
?>