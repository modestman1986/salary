<?php

namespace Salary\Models;

class SalaryModel
{
    private $id;
    private $amount;
    private $year;
    private $month;
    private $employee_id;

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Get the value of month
     */ 
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Get the value of employee_id
     */ 
    public function getEmployee_id()
    {
        return $this->employee_id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}