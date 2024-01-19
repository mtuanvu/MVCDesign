<?php

class Teacher
{
    //Thuộc tính (property or field) <=> Cột(column) trong database
    //Định nghĩa lên đối tượng được tạo ra từ class teacher
    //private chỉ được sử dụng trong class teacher
    //protechted chỉ sử dụng trong cùng namespace (THư mục: madels, controllers...)
    //public có thể truy cập bất kì đâu
    private $id; //int get:đọc, set:ghi

    private $name; //string

    private $title; //string

    /**
     * @param $id
     * @param $name
     * @param $title
     */

    //constructor là hàm khởi tạo, dùng để tạo ra đối tượng trong một class
    //class tạo ra đối tượng (object)
    public function __construct($id, $name, $title)
    {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
    }
    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */

    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */

    public function getTitle()
    {
        return $this->title;
    }
}
