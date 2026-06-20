<?php

// composer autoload used for to reduce include once for each class 
include_once "vendor/autoload.php";

//using namespace for folder wise classes 
use \Classes\Education\School;
use \Classes\Education\Teacher;
use \Classes\Finance\Employee;
use \Classes\Finance\Salary;

// normal class call which is not in any folder
$student = new Student();

// class call which is exist in any folder using namespace
$school = new School();
$teacher = new Teacher();
$salary = new Salary();
$employee = new Employee();