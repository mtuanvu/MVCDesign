<?php

class View
{
    public function displayStudents($students)
    {
        echo '<h2>List of Students</h2>';
        echo '<table border = "1">';
        echo '<tr><th>Id</th><th>Name</th><th>Address</th></tr>';

        foreach ($students as $student) {
            echo '<tr>';
            echo '<td>' . $student->getId() . '</td>';
            echo '<td>' . $student->getName() . '</td>';
            echo '<td>' . $student->getAddress() . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    public function displaySubjects($subjects)
    {
        echo '<h2>List of Subjects</h2>';
        echo '<table border = "1">';
        echo '<tr><th>Id</th><th>Name</th></tr>';

        foreach ($subjects as $subject) {
            echo '<tr>';
            echo '<td>' . $subject->getId() . '</td>';
            echo '<td>' . $subject->getName() . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    public function displayMarks($marks)
    {
        echo '<h2>List of Marks</h2>';
        echo '<table border = "1">';
        echo '<tr><th>Id</th><th>Student Id</th><th>Subject Id</th><th>Marks</th></tr>';

        foreach ($marks as $mark) {
            echo '<tr>';
            echo '<td>' . $mark->getId() . '</td>';
            echo '<td>' . $mark->getStudentId() . '</td>';
            echo '<td>' . $mark->getSubjectId() . '</td>';
            echo '<td>' . $mark->getMarks() . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
