<?php

require __DIR__ . '/library/Member.php';
require __DIR__ . '/library/Admin.php';

$m = new Member('will','pas',10);
$admin = new Admin('will','pas',10,Level::SUPERADMIN);
// var_dump($m);
$log = "wiall";
$pas = "pasaz";
echo "php version : ".phpversion(). "\n";

if($admin->auth($log,$pas)){
    echo "auth réussi";
}
else{
    echo "échec";
}