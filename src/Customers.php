<?php

namespace Jodi\PhpComposerLibrary;

class Customers {
    public function __construct(private string $name)
    {
    }

    public function sayHello (string $name): string {
        return "Hello $name, my name is $this->name";  
    }
}