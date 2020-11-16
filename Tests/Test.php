<?php

namespace Proximify\UserBundle\Tests;

use PHPUnit\Framework\TestCase;
use Proximify\UserBundle\Entity\User;

class Test extends TestCase
{
    public function testEmail()
    {
        $user = $this->getUser();
        $this->assertNull($user->getEmail());
        $user->setEmail('tianyu@proximify.ca');
        $this->assertSame('tianyu@proximify.ca', $user->getEmail());
    }

    public function testUserRoles()
    {
        $user = $this->getUser();
        $roles = $user->getRoles();
        $this->assertContains('ROLE_USER', $roles);
    }

    /**
     * @return User
     */
    protected function getUser()
    {
        return $this->getMockForAbstractClass('Proximify\UserBundle\Entity\User');
    }
}