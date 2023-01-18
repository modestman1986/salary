<?php

namespace Salary\Models;

class PlaningModel
{
    private $id;
    private $day;	
    private $matter;	
    private $level;	
    private $employee_id;	
    private $student_id;	

    /**
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Get the value of matter
     */ 
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * Get the value of employee_id
     */ 
    public function getEmployee_id()
    {
        return $this->employee_id;
    }

    /**
     * Get the value of level
     */ 
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Get the value of student_id
     */ 
    public function getStudent_id()
    {
        return $this->student_id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}