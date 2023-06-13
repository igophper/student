<?php

namespace Tests;

use Igophper\Student\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    public function testGetName()
    {
        $s = new Student("test");
        $this->assertEquals("test", $s->getName());
    }
}
