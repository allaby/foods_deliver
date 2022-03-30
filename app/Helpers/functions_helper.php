<?php

function debug(&$_string)
{
    echo '<pre><br>File -> ' . __FILE__ . ' and Line => ' . __LINE__;
    echo "<br /> Debug Information for variable <br />";
    print_r($_string);
    echo "</pre>";
    exit;
}

function is_logged(){
    $session = \Config\Services::session();
    if($session->get('is_logged')){
        return true;
    }
    return false;
}
