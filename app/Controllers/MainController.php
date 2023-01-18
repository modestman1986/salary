<?php

namespace Salary\Controllers;

use Salary\Models\EmployeeModel;
use Salary\Models\ContractModel;


class MainController 
{
    public function homeAction()
    {
        $contractModel = new ContractModel();
        $contracts = $contractModel->getAllContracts();

        $employeeModel = new EmployeeModel();
        $employees = $employeeModel->getAllEmployees(); 

        $this->showViews('employees', [$employees, $contracts]);
    }


   /*  public function testAction()
    {
        
        
    } */
   
    public function showViews($viewName, $dataArray = [])
    {
        global $router;
        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/partials/_header.tpl.php';
        require_once __DIR__ . '/../views/main/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/_footer.tpl.php';
    }

     /**
     * Fonction qui retourne la page erreur en cas de route inconnue
     *
     * @return error
     */
    public function pageNotFound()
    {
        header("HTTP/1.1 404 Not Found");
        $this->showViews('404');
    }
}