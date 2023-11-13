<?php
class Foo
{
    /** @var string **/
    private $helloString = 'Hello world!';

    public function printString(): void
    {
        echo $this->helloString;
    }
}

$foo = new Foo();
$foo->printString();
