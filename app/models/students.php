<?php

namespace models;
use config\Connection;
use helper\ErrorMessage;
use Exception;

require_once '../../config/Connection.php';
require_once '../../helper/successMessage_or_error.php';
class students extends Connection
{

    public function __construct() // constructor for Database Connection
    {
         self::Connect();
    }

    public function createNewStudent(
        string $f_name,
        string $l_name,
        string $date_birt,
        string $email,
        int $studentId,
        string $profile,
        string $m_middle
    ):void
    {
        try{

            $query = "INSERT INTO students(F_name, L_name, date_birth, email, studentId,profile,m_middle) VALUES (?,?,?,?,?,?,?)";
            $stmt = self::Connect()->prepare($query);

            if (!$stmt){
                ErrorMessage::Error_SuccessMessage(false,'Failed to prepare Statement');
                return;
            }

            $stmt->bind_param('ssssiss',$f_name,$l_name,$date_birt,$email,$studentId,$profile,$m_middle);

            if ($stmt->execute()) {
                ErrorMessage::Error_SuccessMessage(true,'Successfully Added New Student');
            }

            $stmt->close();

        }catch(Exception $e){
            error_log('Error'.$e->getMessage());
            ErrorMessage::Error_SuccessMessage(false,'An error accured while creating New Student');
        }
    }


   public  function studentIdChecker($studentId):bool
   {

       try{
        $query = "SELECT studentId FROM students WHERE studentId = ?";
         $stmt = self::Connect()->prepare($query);
         
         if (!$stmt) {
            ErrorMessage::Error_SuccessMessage(false,'Failed to prepared Statement');
         }

         $stmt->bind_param('i',$studentId);

         $stmt->execute();
         $result = $stmt->get_result();

         if ($result->num_rows > 0) {
          return true;
        }
        
        $stmt->close();

       }catch(Exception $e){
           error_log('Error'.$e->getMessage());
       }
       return  false;
   }
}