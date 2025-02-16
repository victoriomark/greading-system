<?php
namespace models;

use config\Connection;
use Exception;
use helper\ErrorMessage;

require_once '../../config/Connection.php';
require_once '../../helper/successMessage_or_error.php';

class Department extends Connection {

    public function createDepartment(string $departmentName):void{

       try{
            $query = "INSERT INTO departments(department_name)VALUES(?)";
            $stmt = $this->Connect()->prepare($query);

            if(!$stmt){
                ErrorMessage::Error_SuccessMessage(false,'Failed to Prepared Statement');
                return;
            }

            $stmt->bind_param('s',$departmentName);

            if (!$stmt->execute()) {
                ErrorMessage::Error_SuccessMessage(false,'Execution Failed');
            }else{
                ErrorMessage::Error_SuccessMessage(true, 'Successfully Created New Department');
            }

            $stmt->close();

       }catch(Exception $e){
        error_log('Error'. $e->getMessage());
        ErrorMessage::Error_SuccessMessage(false, 'An error accured while creating Department');
       }
    }


    public function DepartmentChecker($departmentName):bool{

      try{

        $query = "SELECT department_name FROM departments WHERE department_name = ?";
        
        $stmt = $this->Connect()->prepare($query);
        
        if(!$stmt){
            ErrorMessage::Error_SuccessMessage(false,'Failed to Prepared Statement');
        }

        $stmt->bind_param('s',$departmentName);
        $stmt->execute();
        $result = $stmt->get_result();
           
        if ($result->num_rows > 0) {
            return true;
        }else{
            return false;
        }
         

      }catch(Exception $e){
        error_log('Error'. $e->getMessage());
      }

      return false;
    }


    public function show():array{
        
        try{
            $result = $this->Connect()->query("SELECT * FROM departments");
            $data = [];
            
            if ($result->num_rows  > 0) {
               
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

                return $data;
            }
          
        }catch(Exception $e){
            error_log('Error'. $e->getMessage());
        }
        return [];
    }

}