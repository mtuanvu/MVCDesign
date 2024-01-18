<?php

namespace controllers;

use Database;
use models\Student;


class StudentController
{

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAllStudents()
    {
        $sql = "SELECT * FROM students";
        $result = $this->db->query($sql);

        $studentData = $this->db->fetchAll($result);

        $students = [];
        foreach ($studentData as $data) {
            $student = new Student($data['id'], $data['name'], $data['address']);
            $students[] = $student;
        }

        return $students;
    }

    public function getStudentById($id)
    {
        $sql = "SELECT * FROM students WHERE id = $id";
        $result = $this->db->query($sql);
        return $this->db->fetchAll($result);
    }

    public function addStudent($id, $name, $address)
    {
        $sql = "INSERT INTO students(id,name,address) VALUES ('$id', '$name','$address')";
        $this->db->query($sql);
    }

    public function updateStudent($id, $name, $address)
    {
        $sql = "UPDATE students SET name='name', address = 'address' WHERE id = $id";
        $this->db->query($sql);
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM students WHERE id = $id";
        $this->db->query($sql);
    }
}
