<?php 
function view($filename)
{
    return require_once(ROOT_PATH.'/views/'.$filename);    
}
?>