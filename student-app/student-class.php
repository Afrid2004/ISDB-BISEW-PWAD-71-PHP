<?php

class Student
{
    public $id;
    public $name;
    public $email;
    public $gender;
    public $phone;

    //get all data from constructor to variables using forms
    public  function __construct($_id, $_name, $_email, $_gender, $_phone)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
        $this->gender = $_gender;
        $this->phone = $_phone;
    }

    //show all data
    static function allData()
    {
        $data = file('student_data.txt');
        return $data;
    }

    //find data
    static function find($_id)
    {
        $result = [];
        $students = file('student_data.txt');
        foreach ($students as $student) {
            list($id, $name, $email, $gender, $phone) = explode(',', $student);
            if ($id == $_id) {
                $result = compact("id", "name", "email", "gender", "phone");
            }
        }
        if(count($result)){
            return $result;
        }
        return  $result;
    }
}
