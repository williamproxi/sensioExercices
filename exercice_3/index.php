<?php
require_once __DIR__ . '/library/Member.php';
require_once __DIR__ . '/library/Admin.php';

$m = new Member('william','will','pas',10);
$n = new Member('deo','will','pas',10);
$admin = new Admin('alo','will','pas',10,Level::SUPERADMIN);
// var_dump($m);
$log = "will";
$pas = "pas";
echo "php version : ".phpversion(). "\n";
try{

    $admin->auth($log,$pas);
    echo "auth réussi\n";
}
catch(AuthFailException){
    echo "échec\n";
}
echo "nombre member: ". member::count()."\n";
echo "nombre admin: ". admin::count()."\n";
unset($n);
echo "nombre member: ". member::count()."\n";
// echo $m;
