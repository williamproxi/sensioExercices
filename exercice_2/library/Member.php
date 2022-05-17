<?php

class Member{
    
    function __construct(public string $login, private string $password, public ?int $age = null)
    {
        
    }

    public function auth(string $login, string $password): bool{
        if ($login == $this->login && $password == $this->password){
            return true;
        }
        return false;
    }
}
