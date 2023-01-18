<?php

namespace Salary\Models;
use Salary\Utils\Database;
use \PDO;

class EmployeeModel
{
    private $id;
    private $firstname;	
    private $lastname;	
    private $gender;
    private $birthday;
    private $num_security;
    private $nationality;
    private $birth_country;
    private $email;
    private $phone;
    private $adress;
    private $navigo;
    private $contract_id;
    
   /*  public function __construct($firstname, $lastname, $gender, $birthday, $num_security, $nationality, $birth_country, $email, $phone,$adress,$navigo, $contract_id)
    {
        $this->$firstname = $firstname;
        $this->$lastname = $lastname;	
        $this->$gender = $gender;
        $this->$birthday = $birthday;
        $this->$num_security = $num_security;
        $this->$nationality = $nationality;
        $this->$birth_country = $birth_country;
        $this->$email = $email;
        $this->$phone = $phone;
        $this->$adress = $adress;
        $this->$navigo = $navigo;
        $this->$contract_id = $contract_id;
        
    } */
     
    /**
     * Datas of all employees in an array 
     *
     * @return Employee[]
     */
    public function getAllEmployees()
    {
        $dbConnection = Database::getPDO();
        $sql = "SELECT * FROM `employee` ORDER BY `lastname`;";
        $pdo = $dbConnection->query($sql);
        $listOfEmployees = $pdo->fetchAll(PDO::FETCH_ASSOC);
        return $listOfEmployees;
    }
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
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Get the value of num_security
     */ 
    public function getNum_security()
    {
        return $this->num_security;
    }

    /**
     * Get the value of nationality
     */ 
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Get the value of birth_country
     */ 
    public function getBirth_country()
    {
        return $this->birth_country;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Get the value of navigo
     */ 
    public function getNavigo()
    {
        return $this->navigo;
    }

    /**
     * Get the value of contract_id
     */ 
    public function getContract_id()
    {
        return $this->contract_id;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}