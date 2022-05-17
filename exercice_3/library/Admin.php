<?php

require_once "Level.php";

class Admin extends Member{
    
    // enum level{ case ADMIN, case SUPERADMIN}
    public function __construct(public string $login, private string $password, public ?int $age = null,private Level $level = Level::ADMIN){
        parent::__construct($login,$password,$age);

    }

    public function auth(string $login, string $password): bool{
        if ( ($login == $this->login && $password == $this->password) || Level::SUPERADMIN == $this->level){
            return true;
        }
        return false;
    }
}