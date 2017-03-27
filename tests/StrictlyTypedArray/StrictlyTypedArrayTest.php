<?php

namespace Test\StrictlyTypedArray;

use SamuraiProgramming\StrictlyTypedArray\User;
use SamuraiProgramming\StrictlyTypedArray\UserCollection;
use Test\UnitTestCase;

class StrictlyTypedArrayTest extends UnitTestCase
{
    public function testCreateStrictlyTypedArray()
    {
        $userCollection = new UserCollection();

        $userCollection->setUsers(
            new User('luke', '1234'),
            new User('ben', '5678'),
            new User('daisy', '9012')
        );

        $users = $userCollection->getUsers();

        $this->assertInternalType('array', $users);
        $this->assertInstanceOf('SamuraiProgramming\StrictlyTypedArray\User', $users[0]);
        $this->assertInstanceOf('SamuraiProgramming\StrictlyTypedArray\User', $users[1]);
        $this->assertInstanceOf('SamuraiProgramming\StrictlyTypedArray\User', $users[2]);
    }
}
