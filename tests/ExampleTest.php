<?php


class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel')
             ->dontSee('Rails')
             ->dontSee('Swagger');
    }
}
