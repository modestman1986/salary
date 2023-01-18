<?php

namespace Salary\Models;

class ContractModel
{
    private $id;
    private $begin_date;
    private $end_date;
    private $type;
    private $hourly_volume;

    /**
     * Get the value of hourly_volume
     */ 
    public function getHourly_volume()
    {
        return $this->hourly_volume;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of end_date
     */ 
    public function getEnd_date()
    {
        return $this->end_date;
    }

    /**
     * Get the value of begin_date
     */ 
    public function getBegin_date()
    {
        return $this->begin_date;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}