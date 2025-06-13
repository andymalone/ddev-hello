<?php
// src/Hello.php
namespace App;

class Hello {
    public function sayHello(string $name): string {
        return "Hello, " . $name . "!";
    }
}
