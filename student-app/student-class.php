<?php

class Student
{
    public $id;
    public $name;
    public $email;
    public $gender;
    public $mobile;

    //constructor to get data from create student form
    public function __construct($sid, $sname, $semail, $sgender, $smobile)
    {
        $this->id = trim($sid);
        $this->name = trim($sname);
        $this->email = trim($semail);
        $this->gender = trim($sgender);
        $this->mobile = trim($smobile);
    }

    //save data into database
    function save()
    {
        $data = PHP_EOL . "$this->id, $this->name, $this->email, $this->gender, $this->mobile";
        file_put_contents('../student_data.txt', $data, FILE_APPEND);
        return 'Created data successfully.';
    }

    //show all data
    static function showAllstudent()
    {
        $data = file('student_data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $data;
    }

    //find data using perameterized id
    static function find($fid)
    {
        $students = file('student_data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $result = [];
        foreach ($students as $student) {
            //split the array where found comma ,
            list($id, $name, $email, $gender, $mobile) = explode(',', $student);
            if (trim($fid) == trim($id)) {
                return compact('id', 'name', 'email', 'gender', 'mobile');
            }
        }
        if (count($result)) {
            return $result;
        }
        return $result;
    }

    //update student
    function updateStudent()
    {
        $students = file('../student_data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $data = "";
        foreach ($students as $student) {
            list($id) = explode(',', $student);
            if ($id == $this->id) {
                $data .= PHP_EOL . "$this->id,$this->name,$this->email,$this->gender,$this->mobile";
            } else {
                $data .= PHP_EOL . $student;
            }
        }
        file_put_contents('../student_data.txt', $data);
        return "updated successfully";
    }

    //delete student
    static function deleteStudent($sid)
    {
        $students = file('student_data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $data = "";
        foreach ($students as $student) {
            list($id) = explode(',', $student);
            // if id not matched with the perameterized id then put all data without it
            if ($id != $sid) {
                $data .= PHP_EOL . $student;
            }
        }
        // again entry data without the id
        file_put_contents('student_data.txt', $data);
        return "Deleted successfully";
    }
}

