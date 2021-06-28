<?php 

include "inc/functions.php";
include "pages/begin.php"; 

$page = "home";

if(isset($_GET['page']))
{
    $page = $_GET['page'];
} 



$file = "pages/page-". $page .".php";

if(is_file($file))
{
    include $file;
}
else
{
    echo '<h1>Nincs ilyen</h1>';
    echo '<h1>A kért lap nem található</h1>';
}
include "pages/end.php"; ?>