<?php
namespace controllers;

use helper\ErrorMessage;
use models\Department;

require_once '../models/department.php';
require_once '../../helper/successMessage_or_error.php';
class DepartmentController{

    public static function createDepartment():void{

        $departmentName = htmlspecialchars($_POST['DepartmentName']);

        if (empty($departmentName)) {
            ErrorMessage::Error_SuccessMessage(false, 'departemnt is requred!');
            return;
        }


        $department = new Department();

        if ($department->DepartmentChecker($departmentName)) { // check if the department is already exist
            ErrorMessage::Error_SuccessMessage(false,'department is already exist please try another department!');
            return;
        }

        $department->createDepartment($departmentName);
    }

    
    public static function showToSelect(){
        $department = new Department();
        $select = '';
    
        $data = $department->show();
        $select .= ' <option selected>Select Department</option>';
        if($data){
            foreach($data as $row){
                 $select .= '
                   <option value="'.$row['department_name'].'">'.$row['department_name'].'</option>
                 ';
            }
        }else{
            $select .= '
            <option value="">No department</option>
          ';
        }
        echo $select;
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    
    match($_POST['action']){
       'create' => DepartmentController::createDepartment(),
        'showToSelect' => DepartmentController::showToSelect(),
        default =>  http_response_code(400)
    };

}