<?php

namespace There4\Tests\Authentication;

use There4\Authentication\Cookie;

class CookieTest extends \PHPUnit_Framework_TestCase
{
    public function testAuthenticate()
    {
        $cookie = new Cookie();
        $this->assertFalse($cookie->authenticate('token'));
    }

    public function testSum() {
        $this->assertEquals(3, 2 + 4);
    }
}

/* End of file CookieTest.php */
