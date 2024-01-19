<?php

namespace controllers;

use Database;
use models\Mark;

class MarkController
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAllMarks()
    {
        $sql = "SELECT * FROM marks";
        $result = $this->db->query($sql);

        // $markData = $this->db->fetchAll($result);
        $marks = [];
        foreach ($result as $data) {
            $mark = new Mark($data['id'], $data['student_id'], $data['subject_id'], $data['mark']);
            $marks[] = $mark;
        }
        return $marks;
    }

    public function getMarkById($id)
    {
        $sql = "SELECT * FROM marks WHERE id = $id";
        $result = $this->db->query($sql);
        return $this->db->fetchAll($result);
    }

    public function addMark($id, $mark)
    {
        $sql = "INSERT INTO marks(id, mark) VALUES('$id', '$mark')";
        $this->db->query($sql);
    }

    public function updateMark($id, $mark)
    {
        $sql = "UPDATE marks SET mark = 'mark' WHERE id = '$id'";
        $this->db->query($sql);
    }

    public function deleteMark($id)
    {
        $sql = "DELETE FROM marks WHERE id = $id";
        $this->db->query($sql);
    }
}
