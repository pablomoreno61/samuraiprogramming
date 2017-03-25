<?php

namespace SamuraiProgramming\StrictlyTypedArray;

class UserCollection {
    private $users = [];

    public function setUsers(User ...$users) {
        $this->users = $users;
    }
 
    public function getUsers() {
        return $this->users;
    }
}

