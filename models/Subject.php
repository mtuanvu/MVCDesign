<?php

namespace models;

class Subject
{

    protected $id;

    protected $name;

    // protected $address;


    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        // $this->address = $address;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    // public function getAddress()
    // {
    //     return $this->address;
    // }
}
