<?php

namespace Salary\Models;

class StudentModel
{
    private $id;
    private $firstname;
    private $lastname;
    private $year;
    private $planing;

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get the value of planing
     */ 
    public function getPlaning()
    {
        return $this->planing;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}