<?php

require_once __DIR__ . '/library/Member.php';
require_once __DIR__ . '/library/Admin.php';

$m = new Member('will','pas',10);
$admin = new Admin('will','pas',10,Level::ADMIN);
// var_dump($m);
$log = "wiall";
$pas = "pasaz";
echo "php version : ".phpversion(). "\n";

try{
    $admin->auth($log,$pas);
    echo "auth réussi";
}
catch(Exception $e){
    echo 'error :'.$e->getMessage();
}
