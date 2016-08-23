<?php


class AuthenticationTest extends TestCase
{
    use \Laravel\Lumen\Testing\DatabaseTransactions;

    public function test_login()
    {
        $this->json('POST', 'auth/login', [
            'username'  => 'akung',
            'password'  => 'plokijuh'
        ])->seeJson([

        ]);
    }
}