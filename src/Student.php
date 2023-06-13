<?php

namespace Igophper\Student;

class Student
{
    private $name = 'default name 1';

    public function __construct($name = null)
    {
        !is_null($name) && $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

}