<?php
define('ROOT_PATH',__DIR__);
require_once(__DIR__.'/helper/functions.php');
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if($uri == "/webprogramming/")
{
    view('home.php');

}else if($uri == '/webprogramming/infs')
{
    view('infs.php');

}else if($uri == '/webprogramming/about')
{
    view('about.php');

}
if($uri == "/webprogramming/process-form")
{
    view('process-form.php');

}
else{
    view('404.php');
    
}

?>


