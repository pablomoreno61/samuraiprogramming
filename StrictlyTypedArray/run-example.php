<?php

namespace SamuraiProgramming\StrictlyTypedArray;

include 'User.php';
include 'UserCollection.php';

$userCollection = new UserCollection();

$userCollection->setUsers(
    new User('luke', '1234'),
    new User('ben', '5678'),
    new User('daisy', '9012')
);

print_r($userCollection->getUsers());
