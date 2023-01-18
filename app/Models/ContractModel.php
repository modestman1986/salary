<?php

namespace Salary\Models;

use Salary\Utils\Database;
use \PDO;

class ContractModel
{
    private $id;
    private $begin_date;
    private $end_date;
    private $type;
    private $hourly_volume;

     /**
     * Datas of all contracts in an array 
     *
     * @return Employee[]
     */
    public function getAllContracts()
    {
        $dbConnection = Database::getPDO();
        $sql = "SELECT `id`, `type` FROM `contract`;";
        $pdo = $dbConnection->query($sql);
        $listOfContracts = $pdo->fetchAll(PDO::FETCH_KEY_PAIR);
        return $listOfContracts;
    }

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