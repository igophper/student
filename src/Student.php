<?php

namespace Igophper\Student;

class Student
{
    private $name = 'default name 4';

    public function __construct($name = null)
    {
        if (!defined('STUDENT_NAME')) {
            include_once __DIR__ . '/helpers.php';
        }
        !is_null($name) && $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDefaultConstant()
    {
        return defined('STUDENT_NAME') ? STUDENT_NAME : 'default constant';
    }

}