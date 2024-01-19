<?php

namespace models;

class Mark
{

    protected $id;

    protected $student_id;

    protected $subject_id;

    protected $mark;



    public function __construct($id, $student_id, $subject_id, $mark)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->subject_id = $subject_id;
        $this->mark = $mark;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getStudent_id()
    {
        return $this->student_id;
    }

    public function getSubject_id()
    {
        return $this->subject_id;
    }
    public function getMark()
    {
        return $this->mark;
    }
}
