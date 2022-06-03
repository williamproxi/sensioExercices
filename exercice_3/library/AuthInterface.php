<?php
namespace Exercices;

 interface AuthInterface{
    public function auth(string $login, string $password): bool;
 } 
