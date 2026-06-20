<?php

class Student
{
    public $id;
    public $name;
    public $batch;

    public function __construct($sid, $sname, $sbatch)
    {
        $this->id = $sid;
        $this->name = $sname;
        $this->batch = $sbatch;
    }

    public static function result($id)
    {
        global $db;
        $sql = "SELECT * FROM students_info WHERE id=$id";
        $stmt = $db->prepare($sql);
        if ($stmt && $stmt->num_rows > 0) {
            return $stmt->fetch_object();
        }
        return null;
    }
}
