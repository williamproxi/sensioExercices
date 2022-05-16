<?php

require __DIR__ . '/library/Member.php';

$m = new Member('will','pas',10);
// var_dump($m);
$log = "will";
$pas = "pas";

if($m->auth($log,$pas)){
    echo "auth réussi";
}
else{
    echo "échec";
}
